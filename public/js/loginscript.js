document.getElementById('loginForm').addEventListener('submit', function(event) { 
    event.preventDefault();

    const correctUsername = '6';
    const correctPassword = '6';
    
    const username = document.getElementById('username').value; 
    const password = document.getElementById('password').value;
    
    if(username === correctUsername && password === correctPassword){
        alert('Login Ke Sari Alam Ga Nih??');
        window.location.href = 'index';
    
    }else{
    
    alert('Salah broo');
    
    }
});
