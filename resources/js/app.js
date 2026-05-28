import '../css/app.css';

document.addEventListener('DOMContentLoaded', () => {

    const barberCards = document.querySelectorAll('.barber-option');
    const barberInput = document.getElementById('barberInput');

    barberCards.forEach(card => {

        card.addEventListener('click', () => {

            barberCards.forEach(item => {
                item.classList.remove('selected');
            });

            card.classList.add('selected');

            if (barberInput) {
                barberInput.value = card.dataset.barber;
            }

            card.animate(
                [
                    { transform: 'scale(0.95)' },
                    { transform: 'scale(1.05)' },
                    { transform: 'scale(1.03)' }
                ],
                {
                    duration: 250,
                    easing: 'ease-out'
                }
            );
        });

    });

});