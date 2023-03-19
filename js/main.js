document.addEventListener('DOMContentLoaded', () => {

    new Chart(
      document.querySelector('.chart'),
      {
        type: 'line',
        data: {
          labels: ['April', 'May', 'June', 'July', 'August'],
          datasets: [
            {
              label: 'Books read',
              data: [3, 6, 2, 7, 4],
              borderColor: 'crimson',
              borderWidth: 5,
              backgroundColor: 'crimson',
              cubicInterpolationMode: 'monotone',
            },
            // добавили еще один график с другими значениями и цветом
            {
              label: 'Books bought',
              data: [5, 2, 3, 1, 4],
              borderColor: 'teal',
              borderWidth: 5,
              backgroundColor: 'teal',
              cubicInterpolationMode: 'monotone'
            }
          ]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      }
    );
  
  })
  