/* responsive sidebar menu */
const elem = document.querySelector('.sidenav');
M.Sidenav.init(elem, {});

// materialize textarea
M.textareaAutoResize($('#post'));

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

