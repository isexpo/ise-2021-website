Livewire.on('Answer', status => {
    if(status == "Correct"){
        Swal.fire({
            icon: 'success',
            title: 'Jawaban Anda benar!! Point +300',
            showConfirmButton: false,
            timer: 1500
          })
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Jawaban Anda salah',
            showConfirmButton: false,
            timer: 1500
          })
    }
})


Livewire.on('submit', () => {
        Swal.fire({
            icon: 'warning',
            title: 'Apakah Anda yakin ?',
            showDenyButton: true,
            confirmButtonText: 'Iya',
            denyButtonText: 'Batal',
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              Livewire.emit('submitAnswer')
            }
          })
})

Livewire.on('alert', (message) => {
    Swal.fire({
        icon: 'warning',
        title: message,
        showConfirmButton: false,
        timer: 1500
      })
})

