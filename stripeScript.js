const stripe = Stripe("pk_test_51LQkYCSJ12gjUqvuQUvYACWuZZqBEPMN4lJr2SHOcqrpr5KtLvaDAwR7XIcqGSl1I5JVeHk1yNN8LckM8pK3gAlb00QztC7QCW")
const btn = document.querySelector('#btn')
btn.addEventListener('click', ()=>{
    fetch('/checkOut.php',{
        method:"POST",
        headers:{
            'Content-Type' : 'application/json',
        },
        body: JSON.stringify({})
    }).then(res=> res.json())
    .then(payload => {
        stripe.redirectToCheckout({sessionId: payload.id})
    })
})
