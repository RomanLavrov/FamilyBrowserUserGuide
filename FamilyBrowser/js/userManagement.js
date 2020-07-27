$(".userRoles").each(function () {
    $(this).change(function () {
        let newRole = this.options[this.selectedIndex].value;
        let userId = this.dataset.userid;
        data = {};
        data['role'] =  newRole;
        data['userId'] = userId;
        let url="/FamilyBrowser/de/User/ChangeRole";

        $.post(url, data, function(data){
            if (newRole == 0){
                $(`.userData[data-userid = ${userId}]`).hide();
            }
            console.log(data);
        });
    });
}); 

console.log($(".userData[data-userid = 12]").hide());