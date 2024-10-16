const Addmore = document.getElementById('add');
const Allinput = document.getElementById('take-all');

Addmore.addEventListener('click',function(){
    const newinput = document.createElement('div');
    newinput.classList.add('take-all');
     
    newinput.innerHTML = `
    <div class="first-name">
    <input type="text" placeholder="NAME"  name="name[]" id="">
    </div>
    <div class="phone-number">
        <input type="number"  placeholder="Phone Number" name="number[]" id="">
    </div>`;
     
    Allinput.appendChild(newinput);

});