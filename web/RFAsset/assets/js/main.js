$(document).ready(function(){
    function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        /* Applying the top margin on modal dialog to align it vertically center */
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);
    
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });
    
    // Hiding all Meeting Options
    $('.meetings-questionaries').hide();
    // Show the first Section My Description
    $('#description').show();
    // make select the Radio that corresponds to My Description
    $('#rdoDescription').prop('checked', true);
    
    // Show Meeting Options
    $(".rdoMeetings"). click(function(){
        // get the radio ID name without the 'rdo' text so that it matched the ID of the corresponds section
        var optionID = $(this).attr('id').toLowerCase().substring(3);        
        
        // Hiding all Meeting Options
        $('.meetings-questionaries').hide();
        $('#'+optionID).show();
        
        
    });
});








