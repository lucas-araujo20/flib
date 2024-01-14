const input = document.getElementById('upload')

input.addEventListener('change', () => {preview()})


function preview(){

  var fr = new FileReader()
  fr.readAsDataURL(input.files[0])

  fr.addEventListener("load", () => {
    var url = fr.result

    var foto = document.getElementById('foto')
    foto.setAttribute("src", url)
  })
}