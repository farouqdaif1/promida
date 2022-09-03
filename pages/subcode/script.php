<script >
const menu = document.querySelector('.toggle-menu');
const button= document.querySelector('.close-btn')
    function showMenu() {
        document.querySelector('.close-btn').classList.toggle('active');
        document.querySelector('.ul-links').classList.toggle('active');
        document.querySelector('.mob').classList.toggle('active');
}
menu.addEventListener('click', showMenu);
button.addEventListener('click', showMenu);
</script>