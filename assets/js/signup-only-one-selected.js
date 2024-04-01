const accountTypes = document.querySelectorAll(".account-type label.large-button input")
accountTypes.forEach(accountType => {
    accountType.addEventListener("click", () => {
        var accountTypeChecked = accountType.checked
        accountTypes.forEach(accountTypeClick => {
            accountTypeClick.checked = false
        })
        if (accountTypeChecked == true) {
            accountType.checked = true;
            console.log("click and check")
        }
    })
})