
function mascara_cpf(input){
    let cpf = input.value
    
    if(isNaN(cpf[cpf.length - 1])){ 
    input.value = cpf.substring(0, cpf.length-1)
    return
    }
    input.setAttribute("maxlength", "14")
    if (cpf.length == 3 || cpf.length == 7) input.value += "."
    if (cpf.length == 11) input.value += "-"
}