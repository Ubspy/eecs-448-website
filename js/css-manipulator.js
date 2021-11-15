$(document).ready(() =>
{
    let borderColor = $('#border-color-select');
    let borderWidth = $('#border-width');
    let backgroundColor = $('#background-color-select');

    // Manipulate CSS on load
    manipulateCSS();

    function manipulateCSS()
    {
        let nftDiv = $('#nft-div');
        console.log(backgroundColor.val());
        nftDiv.css("background-color", getColor(backgroundColor.val()));
        nftDiv.css("border-color", getColor(borderColor.val()));
        nftDiv.css("border-width", borderWidth.val());
        nftDiv.css("border-style", "solid");
    }

    // Get non grody colors
    function getColor(color)
    {
        if(color === "red")
        {
            return '#ffb3b3';
        }
        else if(color === "blue")
        {
            return '#D7ECFA'; 
        }
        else if(color === "green")
        {
            return '#adebad';
        }
    }

    $('#manipulate-button').click(() =>
    {
        manipulateCSS();
    });
});
