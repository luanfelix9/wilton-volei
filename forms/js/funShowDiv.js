const op = document.querySelector('#flexRadioDefault1DEF');
const table = document.querySelector('#D-table');

op.addEventListener('click', function(){
    if(table.style.display === 'none'){
        table.style.display === 'block';
    }
});