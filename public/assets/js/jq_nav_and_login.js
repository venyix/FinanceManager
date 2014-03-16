
    // bind 'myForm' and provide a simple callback function 
    $('#loginForm').ajaxForm(function() { 
        location.reload(true);
    });
    $(document).ready(function() {
        $("#homeButton").click(function(){
            location.href = 'index.php';
        });
        $("#myAccountButton").click(function(){
            location.href = 'my_account.php';
        });
        $("#myBudgetButton").click(function(){
            //location.href = 'my_budget.php';
            alert("\
            I'm sorry this page is temporarily disabled it \n\
            is undergoing maintenance. If you would like more \n\
            information about this site please contact the\n\
            administrator Phillip at venyix@gmail.com");
        });
    });