(()=>{function e(e,a,r){return a in e?Object.defineProperty(e,a,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[a]=r,e}$((function(a){var r,t=document.getElementById("chartLine").getContext("2d");new Chart(t,{type:"bar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],datasets:[{label:"Total Open Tickets",data:[20,17,27,23,17,19,23,17,13,28,22,27],borderWidth:2,backgroundColor:"#2e3471",borderColor:"#2e3471",pointBackgroundColor:"#2e3471",pointRadius:0,type:"bar"},{label:"Total Closed Tickets",data:[28,22,21,18,13,22,24,18,16,21,18,24],borderWidth:3,backgroundColor:"#3366ff",borderColor:"#3366ff",pointBackgroundColor:"#3366ff",pointRadius:0,type:"bar"}]},options:{responsive:!0,maintainAspectRatio:!1,layout:{padding:{left:0,right:0,top:0,bottom:0}},tooltips:{enabled:!1},scales:{yAxes:[{gridLines:{display:!0,drawBorder:!1,zeroLineColor:"rgba(142, 156, 173,0.1)",color:"rgba(142, 156, 173,0.1)"},scaleLabel:{display:!1},ticks:{beginAtZero:!0,stepSize:5,suggestedMin:5,suggestedMax:30,fontColor:"#8492a6"}}],xAxes:[{barValueSpacing:-2,barDatasetSpacing:0,barRadius:15,stacked:!1,categoryPercentage:.4,barPercentage:.8,ticks:{beginAtZero:!0,fontColor:"#8492a6"},gridLines:{color:"rgba(142, 156, 173,0.1)",display:!1}}]},legend:{display:!1},elements:{point:{radius:0}}}});$("#supportticket-dash").DataTable((e(r={order:[[0,"desc"]]},"order",[]),e(r,"columnDefs",[{orderable:!1,targets:[5]},{orderable:!1,targets:[0]}]),e(r,"language",{searchPlaceholder:"Search...",sSearch:""}),r)),$(".select2").select2({minimumResultsForSearch:1/0})}))})();