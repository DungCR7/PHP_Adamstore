function emailIsValid(customer_mail){
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(customer_mail);
}
function telIsValid(customer_phone){
    return /^\d*$/.test(customer_phone);
}
function save(){
    let customer_name = document.getElementById('customer_name').value;
    let customer_mail = document.getElementById('customer_mail').value;
    let customer_pass = document.getElementById('customer_pass').value;
    let confirmpassword = document.getElementById('confirmpassword').value;
    let customer_phone = document.getElementById('customer_phone').value;
    let customer_address = document.getElementById('customer_address').value;
    var check = true;


    // Bắt lỗi tên
    if (_.isEmpty(customer_name)){
        customer_name = '';
        document.getElementById('fullname-error').innerHTML = 'Vui lòng nhập họ và tên';
        check = false;
    } else if(customer_name.trim().length <= 2) {
        customer_name = '';
        check = false;
        document.getElementById('fullname-error').innerHTML = 'Họ và tên không được nhỏ hơn 2 ký tự';
    } else if(customer_name.trim().length >= 50) {
        customer_name = '';
        check = false;
        document.getElementById('fullname-error').innerHTML = 'Họ và tên không được lớn hơn 50 ký tự';
    }else{
        document.getElementById('fullname-error').innerHTML = '';
    }



    // Bắt lỗi email
    if (_.isEmpty(customer_mail)){
        customer_mail = '';
        check = false;
        document.getElementById('email-error').innerHTML = 'Vui lòng nhập email';
    } else if(!emailIsValid(customer_mail)){
        customer_mail = '';
        check = false;
        document.getElementById('email-error').innerHTML = 'Email không đúng định dạng';
    }else{
        document.getElementById('email-error').innerHTML = '';
    }



    //Bắt lỗi mật khẩu
    if (_.isEmpty(customer_pass)){
        customer_pass = '';
        check = false;
        document.getElementById('password-error').innerHTML = 'Vui lòng nhập mật khẩu';
    } else if(customer_pass.trim().length < 6) {
        customer_pass = '';
        check = false;
        document.getElementById('password-error').innerHTML = 'Mật khẩu không được nhỏ hơn 6 ký tự';
    }else{
        document.getElementById('password-error').innerHTML = '';
    }



    // Bắt lỗi nhập lại mật khẩu
    if (_.isEmpty(confirmpassword)){
        confirmpassword = '';
        check = false;
        document.getElementById('confirmpassword-error').innerHTML = 'Vui lòng nhập lại mật khẩu';
    } else if(confirmpassword == customer_pass) {
        document.getElementById('confirmpassword-error').innerHTML = '';
    }else{
        confirmpassword = '';
        check = false;
        document.getElementById('confirmpassword-error').innerHTML = 'Nhập lại mật khẩu sai';
    }



    // Bắt lỗi số điện thoại
    if (_.isEmpty(customer_phone)){
        customer_phone = '';
        check = false;
        document.getElementById('tel-error').innerHTML = 'Vui lòng nhập số điện thoại';
    } else if (customer_phone.trim().length > 10){
        customer_phone = '';
        check = false;
        document.getElementById('tel-error').innerHTML = 'Số điện thoại không đúng';
    }else if(!telIsValid(customer_phone)){
        customer_phone = '';
        check = false;
        document.getElementById('tel-error').innerHTML = 'Số điện thoại không đúng định dạng';
    }else{
        document.getElementById('tel-error').innerHTML = '';
    }



    // Bắt lỗi địa chỉ
    if (_.isEmpty(customer_address)){
        customer_address = '';
        check = false;
        document.getElementById('address-error').innerHTML = 'Vui lòng nhập địa chỉ';
    }else{
        document.getElementById('address-error').innerHTML = '';
    } 



    // Lưu thông tin vào dữ liệu 
    if (customer_name && customer_mail && customer_pass && confirmpassword && customer_phone && customer_address){
        console.log(customer_name, customer_mail, customer_pass, confirmpassword, customer_phone, customer_address);
    }
    console.log(check);
    return check;
}
