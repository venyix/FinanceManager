<table border ='0' width='100%' cellpadding='0' cellspacing='0'>
    <tr>
        <form id="accountForm" action="" method="post">
        <td id='informationLabel'>
            <label for="username">
                Username:
            </label>
        </td>
        <td id='information'>
            <input type='text' id='username' class='readOnly' 
            value='<?php echo $_SESSION['user']['username']
            ?>' readonly/>
        </td>
    </tr>
    <tr>
        <td id='informationLabel'>
            <label for="email">
                Email Address:
            </label>
        </td>
        <td id='information'>
            <input type='text' id='email'
            value='<?php echo $_SESSION['user']['email']
            ?>' />
        </td>
    </tr>
    <tr>
        <td id='informationLabel'>
        <form id="accountForm" action="" method="post">
            <label for="first_name">
                First Name:
            </label>
        </td>
        <td id='information'>
            <input type='text' id='first_name'
            value='<?php echo $_SESSION['user']['first_name']
            ?>' />
        </td>
    </tr>
    <tr>
        <td id='informationLabel'>
            <label for="last_name">
                Last Name:
            </label>
        </td>
        <td id='information'>
            <input type='text' id='last_name'
            value='<?php echo $_SESSION['user']['last_name']
            ?>' />
        </td>
    </tr>
    <tr>
        <td id='informationLabel'>
            <label for="income">
                Annual Income:
            </label>
        </td>
        <td id='information'>
            <input type='text' id='income'
            value='<?php echo $_SESSION['user']['income']
            ?>' />
        </td>
    </tr>
    <tr>
        <td id='informationLabel'>
            <label for="income">
                Pay Period (How Often?):
            </label>
        </td>
        <td id='information'>
            <?php
                switch($_SESSION['user']['pay_period']) {
                    case 'DAILY':
                        $daily = "selected='selected'";$weekly = '';
                        $bi_weekly='';$semi_monthly='';$monthly = '';
                        break;
                    case 'WEEKLY':
                        $daily = '';$weekly = "selected='selected'";
                        $bi_weekly='';$semi_monthly='';$monthly = '';
                        break;
                    case 'BI-WEEKLY':
                        $daily = '';$weekly = '';
                        $bi_weekly="selected='selected'";$semi_monthly='';
                        $monthly = '';
                        break;
                    case 'SEMI-MONTHLY':
                        $daily = '';$weekly = '';
                        $bi_weekly='';$semi_monthly="selected='selected'";
                        $monthly = '';
                        break;
                    case 'MONTHLY':
                        $daily = '';$weekly = '';
                        $bi_weekly='';$semi_monthly='';
                        $monthly = "selected='selected'";
                        break;
                }
            ?>
            <select>
                <option value='DAILY' <?php echo $daily ?>>
                    DAILY</option>
                <option value='WEEKLY' <?php echo $weekly ?>>
                    WEEKLY</option>
                <option value='BI-WEEKLY' <?php echo $bi_weekly ?>>
                    BI-WEEKLY</option>
                <option value='SEMI-MONTHLY' <?php echo $semi_monthly
                        ?>>SEMI-MONTHLY</option>
                <option value='MONTHLY' <?php echo $monthly ?>>
                    MONTHLY</option>
            </select>
        </td>
    </tr>
    </form>
</table>