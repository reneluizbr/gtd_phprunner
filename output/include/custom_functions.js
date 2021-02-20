

// Place event code here.
// Use "Add Action" button to add code snippets.


const draggables = document.querySelectorAll('.cls_draggable')
const containers = document.querySelectorAll('.cls_raia')

draggables.forEach(draggable => {
  draggable.addEventListener('dragstart', () => {
    draggable.classList.add('dragging')
  })

  draggable.addEventListener('dragend', (p_objeto_arrastado) => {
    draggable.classList.remove('dragging')

    // Recupera o ID do objeto que foi arrastado
    wlIDCartao = p_objeto_arrastado.target.getAttribute('id')
    // alert('ID do objeto: ' + wlIDCartao)

    // Em qual raia o p_objeto_arrastado foi solto?
    wlIDRaia = p_objeto_arrastado.target.parentNode.getAttribute('id')
    // alert('ID do objeto: ' + wlIDCartao + ' ID da raia: ' + wlIDRaia)

    // Identifica que o cartao foi movimentado
    wlIDPosicao = p_objeto_arrastado.target.getAttribute('id_posicao')
    wlIDPosicao = p_objeto_arrastado.target.childNodes[1]
    wlIDPosicao = p_objeto_arrastado.target.children.id_posicao
    // wlIDPosicao.innerText = 'Objeto: ' + wlIDCartao + ' / Raia: ' + wlIDRaia
    wlIDPosicao.innerHTML = 'Objeto: <b>' + wlIDCartao + '</b> / Raia: <b>' + wlIDRaia + '</b>'
    wlIDPosicao.classList.add('cls_posicao_alterada')
  })
})

containers.forEach(container => {
  container.addEventListener('dragover', e => {
    e.preventDefault()
    const afterElement = getDragAfterElement(container, e.clientY)
    const draggable = document.querySelector('.dragging')
    if (afterElement == null) {
      container.appendChild(draggable)
    } else {
      container.insertBefore(draggable, afterElement)
    }
  })
})

function getDragAfterElement(container, y) {
  const draggableElements = [...container.querySelectorAll('.cls_draggable:not(.dragging)')]

  return draggableElements.reduce((closest, child) => {
    const box = child.getBoundingClientRect()
    const offset = y - box.top - box.height / 2
    if (offset < 0 && offset > closest.offset) {
      return { offset: offset, element: child }
    } else {
      return closest
    }
  }, { offset: Number.NEGATIVE_INFINITY }).element
}