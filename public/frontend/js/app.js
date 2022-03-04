document.addEventListener('DOMContentLoaded', ()=>{
    const selectDrop = document.querySelector('#countries');
    fetch('https://restcountries.com/v3.1/all').then(res =>{
        return res.json();
    }).then(data => {
        let output = '';
        let ordered = [];
        data.forEach(country => {
            ordered.push(country.name.common)            
            ordered.sort()
        // output += `<option value = '${country.name.common}'>${country.name.common}</option> `
        });
        ordered.forEach(list =>{
            output += `<option value = '${list}'>${list}</option> `
        })
        selectDrop.innerHTML = output
    }).catch(err =>{
        console.log(err);
    })
})