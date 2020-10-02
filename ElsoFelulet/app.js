// input anim
const labels = document.querySelectorAll('.regisztracio-form-control label');

labels.forEach(label => {
    label.innerHTML = label.innerText
        .split('').map((letter, idx) =>
            `<span style="transition-delay: ${idx * 50}ms">${letter}</span>`).join('');
});

//Regiszt Anim
const logo = document.querySelectorAll("#regisztracioAnimacio path");

for (let i = 0; i < logo.length; i++) {
    console.log(`Letter ${i} is ${logo[i].getTotalLength()}`);
}