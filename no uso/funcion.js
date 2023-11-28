let bt = document.getElementById("no")
bt.addEventListener("click",()=>{
    document.getElementById("mtv").innerHTML= `
    <input type="text" name="mtv">
    <input type="button" name="enviar" value="enviar">

    `
    let hd =document.getElementById("sa")
    hd.value="no"
    console.log(hd)
})