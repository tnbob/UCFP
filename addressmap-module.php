
    <div id="map_canvas" class="map_canvas"></div>
    <!--<pre id="logger">Log:</pre>-->
    <script>
      $(function(){
        
        var options = {
          map: ".map_canvas",
          location: "Bangalore",
          markerOptions: {
            draggable: true
          }
        };
        
        /*$("#address").geocomplete(options)
          .bind("geocode:result", function(event, result){
            $.log("Result: " + result.formatted_address);
          })*/
       $("#address").geocomplete(options).bind("geocode:error", function(event, status){
            //$.log("ERROR: " + status);
          }).bind("geocode:result", function(event, result){
            updateSignUpLatLng(result.geometry.location.lat(), result.geometry.location.lng());
          })
          .bind("geocode:multiple", function(event, results){
            //$.log("Multiple: " + results.length + " results found");
            var result = results[0];
            updateSignUpLatLng(result.geometry.location.lat(), result.geometry.location.lng());
          });

        $("#address").bind("geocode:dragged", function(event, latLng){
          updateSignUpLatLng(latLng.lat(), latLng.lng());        
        })
          
        /*
        $("#submit").click(function(){
          $("#address").trigger("geocode");
        });   
        */
      });
      function updateSignUpLatLng(lat, lng) {
        //$.log("lat: " + lat);
        //$.log("lng: " + lng); 
        $('#lat').val(lat);
        $('#lng').val(lng);     
      }
    </script>

