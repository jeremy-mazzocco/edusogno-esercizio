// controllo password nel reset password
document.getElementById('passwordForm').addEventListener('submit', function (event) {
    var newPassword = document.getElementById('newPassword').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if (newPassword !== confirmPassword) {
        event.preventDefault();
        alert('Le password non corrispondono!');
    }
});
