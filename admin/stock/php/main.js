// This section is used to give the id a name and changing to attributes for it to read only this is so the user can not change and edit it on the product management screen as it will change automatically as it is auto increment
let id = $("input[name*='item_id']")
id.attr("readonly","readonly");

// When the button is clicked it will display some information
$(".btnedit").click( e =>{
    let textvalues = displayData(e);

//    ;
// This is for each of the categories within the system and the page it is what the user is able to see
    let itemid = $("input[name*='item_id']");
    let itemname = $("input[name*='item_name']");
    let itemsection = $("input[name*='item_section']");
    let itemprice = $("input[name*='item_price']");
    let itemdescription = $("input[name*='item_desc']");

    // These are the variables adjusted with text values
    itemid.val(textvalues[0]);
    itemname.val(textvalues[1]);
    itemsection.val(textvalues[2]);
    itemprice.val(textvalues[3] .replace("£", ""));
    itemdescription.val(textvalues[4]);
});


// This will display the date that it was updated
function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}
