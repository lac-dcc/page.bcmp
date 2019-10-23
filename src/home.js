//  // mas vou usar pq é mais legível;
// async function funcaoBruno() {
//     const response = await fetch('features.json');
//     const data = await response.json();
//     const tbody = document.createElement("tbody");
//     for(let row of data) {
//         const tr = document.createElement("tr");
//         const td = document.createElement("td");
//         td.innerText = row.name;
//         tr.appendChild(td);
//         tbody.appendChild(tr);
//     }
//     const bruno = document.getElementById("feature-table");
//     const oldTbody = bruno.getElementsByTagName("tbody");
//     if(oldTbody && oldTbody.length) {
//         oldTbody[0].remove();
//     }
//     bruno.appendChild(tbody);
// }
// funcaoBruno();


$('.label-expand').click( (jo) => {
    console.log('weee')
    // var a = $(this).parent().class;
    // //$txt = $lbx.parent().find('.div-hidden-expandable').html();
    // console.log(a)

    // //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    // $txt.slideToggle(500, () => {
    //     //execute this after slideToggle is done
    //     console.log('uuu');
    //     //change text of header based on visibility of content div
    //     $lbx.text( () => {
    //         //change text based on condition
    //         console.log('weee');
    //         return $content.is(":visible") ? "Collapse" : "Expand";
    //     });
    // });

});