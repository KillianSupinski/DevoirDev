function AfficherCreeUneConference()
{
    $.ajax(
        {
            type:"get",
            url:"index.php/ctrl_home/afficherLesTechnologie",
            data:"",
            success:function(data)
            {
            
                
                $("#divTechnologie").empty();
               
                $("#divTechnologie").append(data);
            },
            error:function()
            {
                alert("Ereur d'affichage de creation");
            }            
        }        
    );
    var i = 4;
}