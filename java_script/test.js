let randomNumber=Math.floor(10*Math.random()+1);
let update=function()
{
    let nom=document.forms[0].nom.valu
    let prenom=document.forms[0].prenom.value;
    let nomComplet=`${nom} ${prenom}`;
    document.getElementById('nomComplet').innerHTML=nomComplet;
    return false;
};
 
 
//document.getElementById('userForm').addEventListener('keyup',update);
document.getElementById('btValidation').addEventListener('click',function()
{
    let pValue=document.getElementById('nombre').value;
    if(pValue===randomNumber)
    {
        msg='Bravo, vous avez trouve!';
        color='green';
    }
    console.log(randomNumber);
    document.getElementById('reponse').innerHTML=msg;
    repDiv.innerHTML=msg;
    repDiv.style.color=color;
});
 

