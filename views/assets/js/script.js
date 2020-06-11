$(function () {
    $('#buttonToggle').click(function () {
        $('.contenu').toggle('slide');
        $('.navPhone').css('background-image', 'linear-gradient(chocolate, Silver, tan)');
        if ($('#hidePhone').css('opacity') === '1') {
            $('#hidePhone').css('opacity', '0');
        } else if ($('#hidePhone').css('opacity') === '0') {
            $('#hidePhone').css('opacity', '1');
        }
    });
    $('.notice').on('click', function () {
        $('#modalNotice').modal('show');
    });
    $('.siret').on('click', function () {
        $('#modalSiret').modal('show');
    });
    $('.backArrow').on('click', function(){
        window.location = 'index.php?index=produitAdmin';
    });
});
window.onload = () => {
    // On va chercher la div dans le HTML
    let calendarUser = document.getElementById('calendar');

    // On instancie le calendrier
    let calendar = new FullCalendar.Calendar(calendarUser, {
        // On charge le composant "dayGrid"
        plugins: ['dayGrid', 'timeGrid', 'list'],
        defaultView: 'timeGridWeek',
        locale: 'fr',
        header: {
            left: 'today, prev,next',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,list'
        },
        buttonText: {
            today: 'Aujourd\'hui',
            month: 'mois',
            week : 'semaine',
            list: 'liste',
        }
    });
    // On affiche le calendrier
    calendar.render();
}
