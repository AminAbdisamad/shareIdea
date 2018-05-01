/* responsive sidebar menu */
const elem = document.querySelector('.sidenav');
M.Sidenav.init(elem, {});

// materialize textarea

//M.textareaAutoResize($('#post'));

//Model 
// const elem = document.querySelector('.modal');
// const instance = M.Modal.init(elem, options);
// //const instance = M.Modal.getInstance(elem);
// instance.open();
// instance.close();
// instance.destroy();


// Materialize tabs



/* Flash messages should disappear after 5s */
const msg = document.querySelector('#msg-flash');
setTimeout(() => { msg.remove(); }, 5000);

// Disaple the btn if nothing in the post field
const postField = document.querySelector('#post');
const addPostBtn = document.querySelector('#btn-add-post');
postField.addEventListener('keydown',inableBtn);
function inableBtn(){
    //alert(postField.value);
    if(postField.value != ''){
        addPostBtn.classList.remove('disabled');
    }else {
        //do something I don't know
    }
}

