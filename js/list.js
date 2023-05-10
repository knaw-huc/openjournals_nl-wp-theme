function readMore(id) {
  console.log(id);
  document.getElementById('r'+id).classList.remove('hidden')
  document.getElementById('b'+id).classList.add('hidden')
}