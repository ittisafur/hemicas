// ************************************************
// Shopping Cart API
// ************************************************

var shoppingCart = (function() {
    // =============================
    // Private methods and propeties
    // =============================
    var cart = [];

    // Constructor
    function Item(id, name, type, monthName, netAmount, img, price, count) {
        this.id = id;
        this.name = name;
        this.type = type;
        this.monthName = monthName;
        (this.netAmount = netAmount), (this.img = img), (this.price = price);
        this.count = count;
    }

    // Save cart
    function saveCart() {
        sessionStorage.setItem("shoppingCart", JSON.stringify(cart));
    }

    // Load cart
    function loadCart() {
        cart = JSON.parse(sessionStorage.getItem("shoppingCart"));
    }
    if (sessionStorage.getItem("shoppingCart") != null) {
        loadCart();
    }

    // =============================
    // Public methods and propeties
    // =============================
    var obj = {};

    // Add to cart
    obj.addItemToCart = function(
        id,
        name,
        type,
        monthName,
        netAmount,
        img,
        price,
        count
    ) {
        for (var item in cart) {
            if (cart[item].id === id) {
                (cart[item].type = type),
                (cart[item].monthName = monthName),
                (cart[item].price = price);
                saveCart();
                return;
            }
        }
        var item = new Item(
            id,
            name,
            type,
            monthName,
            netAmount,
            img,
            price,
            count
        );
        cart.push(item);
        saveCart();
    };
    // Set count from item
    obj.setCountForItem = function(name, count) {
        for (var i in cart) {
            if (cart[i].name === name) {
                cart[i].count = count;
                break;
            }
        }
    };
    // Remove item from cart
    obj.removeItemFromCart = function(id) {
        for (var item in cart) {
            if (cart[item].id === id) {
                cart[item].count--;
                if (cart[item].count === 0) {
                    cart.splice(item, 1);
                }
                break;
            }
        }
        saveCart();
    };

    // Remove all items from cart
    obj.removeItemFromCartAll = function(_id) {
        for (var item in cart) {
            if (cart[item].id === id) {
                cart.splice(item, 1);
                break;
            }
        }
        saveCart();
    };

    // Clear cart
    obj.clearCart = function() {
        cart = [];
        saveCart();
    };

    // Count cart
    obj.totalCount = function() {
        var totalCount = 0;
        for (var item in cart) {
            totalCount += cart[item].count;
        }
        if (totalCount == 0) {
            return "";
        }
        return totalCount;
    };

    // Total cart
    obj.totalCart = function() {
        var totalCart = 0;
        for (var item in cart) {
            totalCart += cart[item].price * cart[item].count;
        }
        return Number(totalCart.toFixed(2));
    };

    // List cart
    obj.listCart = function() {
        var cartCopy = [];
        for (i in cart) {
            item = cart[i];
            itemCopy = {};
            for (p in item) {
                itemCopy[p] = item[p];
            }
            itemCopy.total = Number(item.price * item.count).toFixed(2);
            cartCopy.push(itemCopy);
        }
        return cartCopy;
    };

    // cart : Array
    // Item : Object/Class
    // addItemToCart : Function
    // removeItemFromCart : Function
    // removeItemFromCartAll : Function
    // clearCart : Function
    // countCart : Function
    // totalCart : Function
    // listCart : Function
    // saveCart : Function
    // loadCart : Function
    return obj;
})();

function change(data) {
    var spiltData = data.split(",");
    var sponsorType = spiltData[0];
    var sponsorAmount = spiltData[1];
    var sponsor_child_name = document.getElementById("sponsor_child_name")
        .value;
    var sponsor_child_id = document.getElementById("sponsor_child_id").value;
    var sponsor_child_image = document.getElementById("sponsor_child_image")
        .value;

    if (sponsorType == "0") {
        document.getElementById("donate-button").disabled = true;
        // $("#warning").html(`<div class="alert alert-warning" role="alert">
        //     Select Sponsor first
        // </div>`);
    }

    if (sponsorType == "1_month") {
        var netAmount = sponsorAmount;
        shoppingCart.addItemToCart(
            sponsor_child_id,
            sponsor_child_name,
            sponsorType,
            "1 Month",
            netAmount,
            sponsor_child_image,
            sponsorAmount * 1,
            1
        );

        document.getElementById("donate-button").disabled = false;
        $("#warning").html(``);

    }

    if (sponsorType == "3_month") {
        var netAmount = sponsorAmount;
        shoppingCart.addItemToCart(
            sponsor_child_id,
            sponsor_child_name,
            sponsorType,
            "3 Month",
            netAmount,
            sponsor_child_image,
            sponsorAmount * 3,
            1
        );

        document.getElementById("donate-button").disabled = false;
        $("#warning").html(``);

    }
    if (sponsorType == "6_month") {
        var netAmount = sponsorAmount;
        shoppingCart.addItemToCart(
            sponsor_child_id,
            sponsor_child_name,
            sponsorType,
            "6 Month",
            netAmount,
            sponsor_child_image,
            sponsorAmount * 6,
            1
        );

        document.getElementById("donate-button").disabled = false;
        $("#warning").html(``);
    }
    if (sponsorType == "12_month") {
        var netAmount = sponsorAmount;
        shoppingCart.addItemToCart(
            sponsor_child_id,
            sponsor_child_name,
            sponsorType,
            "12 Month",
            netAmount,
            sponsor_child_image,
            sponsorAmount * 12,
            1
        );

        document.getElementById("donate-button").disabled = false;
        $("#warning").html(``);

    }
}

$("#four").click(function() {
    $("#total").text("40");
});

displayCart();

function displayCart() {
    var cartArray = shoppingCart.listCart();
    var output = `
    
    `;
    for (var i in cartArray) {
        output += `
        <tr>
            <td>
                <a href="#" class="remove" aria-label="Remove this item" onclick="removeItemFromCart(${cartArray[i].id})">×</a>
            </td>
            <td>
                <a href=""><img class="cart_img" width="40" height="40" src="/storage/sponsors/${cartArray[i].img}"></a>
            </td>
            <td>
                <a href="">${cartArray[i].name}</a>
            </td>
            <td>
                <span><span>$</span>${cartArray[i].netAmount}</span> <span> / month</span>
            </td>
            <td>
                ${cartArray[i].monthName}
            </td>
            <td>
               $ ${cartArray[i].price}	
            </td>
            <td>
                <a href="/sponsor/${cartArray[i].id}/details" class="custom_update show-next-donate-screen" id="donate-button">Update</a>
            </td>
        </tr>
        `;
    }
    $("#sponsor_cart").html(output);
    $("#grand_total").html(shoppingCart.totalCart());
    $("#ItemCounter").html(shoppingCart.totalCount());
    $("#ItemCounterMobile").html(shoppingCart.totalCount());
}

function removeItemFromCart(id) {
    var _id = id.toString();
    shoppingCart.removeItemFromCart(_id);
    displayCart();
}

function getDetails(data) {
    document.getElementById("Gifts_view").style.display = "block";
    var cartArray = JSON.parse(data);

    var output = `
    
    `;
    for (var i in cartArray) {
        output += `
        <tr>
            
            <td>
                <a href=""><img width="40" height="40" style="margin-left:10px" src="/storage/sponsors/${cartArray[i].img}"></a>
            </td>
            <td>
                <a href="">${cartArray[i].name}</a>
            </td>
            <td>
                <span><span>$</span>${cartArray[i].netAmount}</span> <span> / month</span>
            </td>
            <td>
                ${cartArray[i].monthName}
            </td>
            <td>
               $ ${cartArray[i].price}	
            </td>
        </tr>
        `;
    }
    $("#dashBoar_cart_details").html(output);
}

const sponsorBtn = document.getElementById('donate-button');
if (sponsorBtn !== null) {
    sponsorBtn.addEventListener('click', function() {
        displayCart();
    })
}
const editAccounts = data => {
    document.getElementById("my_accounts").style.display = "block";

    var accounts_info = JSON.parse(data);
    $("#account_name").val(accounts_info.name);
    $("#account_email").val(accounts_info.email);
    $("#account_address").val(accounts_info.billingAddress);
    $("#account_id").val(accounts_info.id);
};

function userMessageBox(data = "", type = "success") {
    var alertHolder = $(".alert-holder-user"),
        close =
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

    alertHolder.html("");
    alertHolder.html(
        '<div class="alert alert-' + type + '">' + close + data + "</div>"
    );
}

const postUserAccountsData = () => {
    var params = {
        id: $("#account_id").val(),
        name: $("#account_name").val(),
        email: $("#account_email").val(),
        billingAddress: $("#account_address").val()
    };

    if (params.name === "") {
        document.getElementById("validation_name").innerText =
            "Please Input Your Name";
        return;
    }
    if (params.billingAddress === "") {
        document.getElementById("validation_address").innerText =
            "Please Input Your Billing Address";
        return;
    }

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var request = $.ajax({
        url: "/user/update",
        method: "POST",
        data: {
            id: params.id,
            name: params.name,
            email: params.email,
            billingAddress: params.billingAddress
        }
    });
    request.done(function(data) {
        userMessageBox("User updated!", "success");
    });
    request.fail(function(data) {
        userMessageBox("User update failed!", "warning");
    });
};

const changePasswordModalLunch = data => {
    document.getElementById("change__password").style.display = "block";
    var accounts_info = JSON.parse(data);
    $("#account_id").val(accounts_info.id);
};

const changePassword = () => {
    var params = {
        id: $("#account_id").val(),
        oldPassword: $("#account_old__password").val(),
        password: $("#account_password").val(),
        rePassword: $("#account_re_password").val()
    };

    if (params.oldPassword === "") {
        document.getElementById("validation__old__password").innerText =
            "Old Password Required";
        return;
    } else {
        document.getElementById("validation__old__password").innerText = "";
    }

    if (params.password.length < 6) {
        document.getElementById("validation_password").innerText =
            "Password Length Minimum 6 Digit";
        return;
    } else {
        document.getElementById("validation_password").innerText = "";
    }

    if (params.password === "" || params.rePassword === "") {
        document.getElementById("validation_password").innerText =
            "Password Required";
        return;
    } else {
        document.getElementById("validation_password").innerText = "";
    }

    if (params.password !== params.rePassword) {
        document.getElementById("validation_password").innerText =
            "Password Not Match";
        return;
    } else {
        document.getElementById("validation_password").innerText = "";
    }

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var request = $.ajax({
        url: "/password/update",
        method: "POST",
        data: {
            id: params.id,
            oldPassword: params.oldPassword,
            password: params.password
        }
    });
    request.done(function(data) {
        userMessageBox("User updated!", "success");
    });
    request.fail(function(data) {
        userMessageBox("User update failed!", "warning");
    });
};

document.addEventListener("readystatechange", event => {
    // When HTML/DOM elements are ready:
    if (event.target.readyState === "interactive") {
        //does same as:  ..addEventListener("DOMContentLoaded"..
        var cartArray = shoppingCart.listCart();
        if ($("#sessionData").val() === "1" && cartArray.length > 0) {
            history.pushState({}, null, "/cart");
            location.reload();
        }
    }

    // When window loaded ( external resources are loaded too- `css`,`src`, etc...)
    if (event.target.readyState === "complete") {
        var path = window.location.pathname;
        var route = path.split("/");
        var sponsorArray = shoppingCart.listCart();

        sponsorArray.filter((v, i) => {
            if (v.id === route[2]) {
                $("#sponsorshipDropDown").val(v.type + "," + v.netAmount);
            }
        });

        if ($("#sponsorshipDropDown").val() === "0") {
            document.getElementById("donate-button").disabled = true;
            // $("#warning").html(`<div class="alert alert-warning" role="alert">
            //     Select Month first
            // </div>`);
        }

        if ($("#sponsorDonates_data").val() !== undefined) {
            var sponsorDonates_data = JSON.parse(
                $("#sponsorDonates_data").val()
            );
            var GrandTotal = 0;
            sponsorDonates_data.filter((v, i) => {
                GrandTotal += parseFloat(v.amount);
            });

            $("#calGrandTotal").html(`<span>$${GrandTotal}</span>`);
        }

        if ($("#zakats_data").val() !== undefined) {
            var zakats_data = JSON.parse(
                $("#zakats_data").val()
            );
            var GrandTotal = 0;
            zakats_data.filter((v, i) => {
                GrandTotal += parseFloat(v.amount);
            });

            $("#calGrandZakatTotal").html(`<span>$${GrandTotal}</span>`);
        }
    }
});