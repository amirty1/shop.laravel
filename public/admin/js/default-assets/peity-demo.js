$(function(){$("span.pie").peity("pie",{fill:["#2f3cff","#d7d7d7","#ffffff"]}),$(".line").peity("line",{fill:"#2f3cff",stroke:"#2f3cff"}),$(".bar").peity("bar",{fill:["#2f3cff","#d7d7d7"]}),$(".bar_dashboard").peity("bar",{fill:["#2f3cff","#d7d7d7"],width:70,height:40});var i=$(".updating-chart").peity("line",{fill:"#2f3cff",stroke:"#2f3cff",width:70,height:40});setInterval(function(){var t=Math.round(20*Math.random()),f=i.text().split(",");f.shift(),f.push(t),i.text(f.join(",")).change()},1e3)});