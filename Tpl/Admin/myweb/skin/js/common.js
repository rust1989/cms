    
    function $(id)
    {
        return document.getElementById(id);
    }    
    
    //检查是否非空
    function notEmpty(obj, msg)
    {
        str = obj.value;
        str1 = "";
        for (i = 0; i < str.length; i++)
        {
                if (str.charAt(i) != " ")
                {
                    str1 = str.substr(i, str.length);
                    break;
                }
        }
    
        if (str1 == "")
        {
            alert(msg);
            obj.value = "";
            obj.focus();
            return false;
        }
        else
        {
            return true;
        }
    }
    
    //检查是否为数字
    function isNumber(obj, msg)
    {
        if(isNaN(obj.value))
        {
                if (undefined == msg)
                {
                    msg = "请输入数字！";
                }
        
                alert(msg);
                obj.select();
                return false;
        }
        else
        {
                return true;    
        }
    }
    
    //检查密码是否相同
    function isSamePwd(objPwd1, objPwd2, msg)
    {
        pwd1 = objPwd1.value;
        pwd2 = objPwd2.value;
    
        if (pwd1 != pwd2)
        {
        if (null == msg)
        {
            alert("密码不相同！");
         }
         else
         {
             alert(msg);
         }
         
        objPwd2.value = "";
        objPwd2.focus();
        return false;
        }
        else
        {
        return true;
        }
    }
    
    //检查邮件地址
    function isEmail(obj, msg)
    {
        ch = obj.value;
        if((ch.indexOf("@") < 1) || (ch.indexOf(".") < 1) || (ch.indexOf(".") == ch.length - 1))
        {
        if (null == msg)
        {
            alert("Email不正确！");
        }
        else
        {
            alert(msg);
        }
        obj.select();
        return false;
        }
        else
        {
        return true;
        }
    }
  function selAll(e) {
 		var a = document.getElementsByName('id[]');
    var l = a.length; while(l--) a[l].checked=e.checked;
	}