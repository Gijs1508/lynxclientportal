$(function (e) {


    if($("#index1").hasClass("dark-mode")){
        // console.log(5 + 6);
        var ctx = document.querySelector("#chartLine").getContext('2d');
        var myChart = new Chart(ctx, {
          data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
              label: 'Total BUdget',
              data: [100, 210, 180, 454, 454, 230, 230, 656, 656, 350, 350, 210, 410],
              borderWidth: 3,
              backgroundColor: 'transparent',
              borderColor: '#3366ff',
              pointBackgroundColor: '#ffffff',
              pointRadius: 0,
              type: 'line'
            }, {
              label: 'Total Employess',
              data: [200, 530, 110, 110, 480, 520, 780, 435, 475, 738, 454, 454, 230],
              borderWidth: 3,
              backgroundColor: 'transparent',
              borderColor: '#2e3471',
              pointBackgroundColor: '#ffffff',
              pointRadius: 0,
              type: 'line',
              borderDash: [7, 3]
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
              padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
              }
            },
            tooltips: {
              enabled: false
            },
            scales: {
              yAxes: [{
                gridLines: {
                  display: true,
                  drawBorder: false,
                  zeroLineColor: 'rgba(142, 156, 173,0.1)',
                  color: "rgba(142, 156, 173,0.1)"
                },
                scaleLabel: {
                  display: false
                },
                ticks: {
                  beginAtZero: true,
                  min: 0,
                  max: 1050,
                  stepSize: 150,
                  fontColor: "#8492a6"
                }
              }],
              xAxes: [{
                ticks: {
                  beginAtZero: true,
                  fontColor: "#8492a6"
                },
                gridLines: {
                  color: "rgba(142, 156, 173,0.1)",
                  display: false
                }
              }]
            },
            legend: {
              display: false
            },
            elements: {
              point: {
                radius: 0
              }
            }
          }
        });
        /* Chartjs (#sales-summary) */

        var myCanvas = document.getElementById("sales-summary");
        myCanvas.height = "300";
        var myChart = new Chart(myCanvas, {
          type: 'bar',
          data: {
            labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            datasets: [{
              label: 'This Month',
              data: [27, 50, 28, 50, 18, 30, 22],
              backgroundColor: '#3366ff',
              borderWidth: 2,
              hoverBackgroundColor: '#3366ff',
              hoverBorderWidth: 0,
              borderColor: '#3366ff',
              hoverBorderColor: '#3366ff',
              borderDash: [5, 2]
            }, {
              label: 'Last Month',
              data: [68, 57, 53, 58, 23, 75, 28],
              backgroundColor: '#fe7f00',
              borderWidth: 2,
              hoverBackgroundColor: '#fe7f00',
              hoverBorderWidth: 0,
              borderColor: '#fe7f00',
              hoverBorderColor: '#fe7f00'
            }, {
              label: 'Last Month',
              data: [100, 78, 68, 95, 0, 98, 58],
              backgroundColor: '#2e3471',
              borderWidth: 2,
              hoverBackgroundColor: '#2e3471',
              hoverBorderWidth: 0,
              borderColor: '#2e3471',
              hoverBorderColor: '#2e3471'
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
              padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
              }
            },
            tooltips: {
              enabled: false
            },
            scales: {
              yAxes: [{
                gridLines: {
                  display: true,
                  drawBorder: false,
                  zeroLineColor: 'rgba(142, 156, 173,0.1)',
                  color: "rgba(142, 156, 173,0.1)"
                },
                scaleLabel: {
                  display: false
                },
                ticks: {
                  beginAtZero: true,
                  stepSize: 25,
                  suggestedMin: 0,
                  suggestedMax: 100,
                  fontColor: "#8492a6",
                  userCallback: function userCallback(tick) {
                    return tick.toString() + '%';
                  }
                }
              }],
              xAxes: [{
                barPercentage: 0.15,
                barValueSpacing: 0,
                barDatasetSpacing: 0,
                barRadius: 0,
                stacked: true,
                ticks: {
                  beginAtZero: true,
                  fontColor: "#8492a6"
                },
                gridLines: {
                  color: "rgba(142, 156, 173,0.1)",
                  display: false
                }
              }]
            },
            legend: {
              display: false
            },
            elements: {
              point: {
                radius: 0
              }
            }
          }
        });
        /*----- Employees ------*/

        var options = {
          series: [74, 35],
          chart: {
            height: 300,
            type: 'donut'
          },
          dataLabels: {
            enabled: false
          },
          legend: {
            show: false
          },
          stroke: {
            show: true,
            width: 0
          },
          plotOptions: {
            pie: {
              donut: {
                size: '80%',
                background: 'transparent',
                labels: {
                  show: true,
                  name: {
                    show: true,
                    fontSize: '29px',
                    color: '#6c6f9a',
                    offsetY: -10
                  },
                  value: {
                    show: true,
                    fontSize: '26px',
                    color: undefined,
                    offsetY: 16,
                    formatter: function formatter(val) {
                      return val + "%";
                    }
                  },
                  total: {
                    show: true,
                    showAlways: false,
                    label: 'Total',
                    fontSize: '22px',
                    fontWeight: 600,
                    color: '#373d3f' // formatter: function (w) {
                    //   return w.globals.seriesTotals.reduce((a, b) => {
                    // 	return a + b
                    //   }, 0)
                    // }

                  }
                }
              }
            }
          },
          responsive: [{
            options: {
              legend: {
                show: false
              }
            }
          }],
          labels: ["Male", "Female"],
          colors: ['#3366ff', '#fe7f00']
        };
        var chart = new ApexCharts(document.querySelector("#employees"), options);
        chart.render(); //________ Datepicker

        $(".fc-datepicker").datepicker({
          dateFormat: "dd M yy",
          monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec"]
        }); //________ Timepiocker

        $('#tpBasic').timepicker(); //________ Countdonwtimer

        $("#clocktimer").countdowntimer({
          currentTime: true,
          size: "md",
          borderColor: "transparent",
          backgroundColor: "transparent",
          fontColor: "#313e6a" //timeZone : -1 //

        });
    }else{
        // console.log(5 + 5);

              /*LIne-Chart */
              var ctx = document.querySelector("#chartLine").getContext('2d');
              var myChart = new Chart(ctx, {
                data: {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                  datasets: [{
                    label: 'Total BUdget',
                    data: [100, 210, 180, 454, 454, 230, 230, 656, 656, 350, 350, 210, 410],
                    borderWidth: 3,
                    backgroundColor: 'transparent',
                    borderColor: '#3366ff',
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 0,
                    type: 'line'
                  }, {
                    label: 'Total Employess',
                    data: [200, 530, 110, 110, 480, 520, 780, 435, 475, 738, 454, 454, 230],
                    borderWidth: 3,
                    backgroundColor: 'transparent',
                    borderColor: '#ccd9ff',
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 0,
                    type: 'line',
                    borderDash: [7, 3]
                  }]
                },
                options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  layout: {
                    padding: {
                      left: 0,
                      right: 0,
                      top: 0,
                      bottom: 0
                    }
                  },
                  tooltips: {
                    enabled: false
                  },
                  scales: {
                    yAxes: [{
                      gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)"
                      },
                      scaleLabel: {
                        display: false
                      },
                      ticks: {
                        beginAtZero: true,
                        min: 0,
                        max: 1050,
                        stepSize: 150,
                        fontColor: "#8492a6"
                      }
                    }],
                    xAxes: [{
                      ticks: {
                        beginAtZero: true,
                        fontColor: "#8492a6"
                      },
                      gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                      }
                    }]
                  },
                  legend: {
                    display: false
                  },
                  elements: {
                    point: {
                      radius: 0
                    }
                  }
                }
              });

              /* Chartjs (#sales-summary) */

              var myCanvas = document.getElementById("sales-summary");
              myCanvas.height = "300";
              var myChart = new Chart(myCanvas, {
                type: 'bar',
                data: {
                  labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                  datasets: [{
                    label: 'This Month',
                    data: [27, 50, 28, 50, 18, 30, 22],
                    backgroundColor: '#3366ff',
                    borderWidth: 2,
                    hoverBackgroundColor: '#3366ff',
                    hoverBorderWidth: 0,
                    borderColor: '#3366ff',
                    hoverBorderColor: '#3366ff',
                    borderDash: [5, 2]
                  }, {
                    label: 'Last Month',
                    data: [68, 57, 53, 58, 23, 75, 28],
                    backgroundColor: '#fe7f00',
                    borderWidth: 2,
                    hoverBackgroundColor: '#fe7f00',
                    hoverBorderWidth: 0,
                    borderColor: '#fe7f00',
                    hoverBorderColor: '#fe7f00'
                  }, {
                    label: 'Last Month',
                    data: [100, 78, 68, 95, 0, 98, 58],
                    backgroundColor: '#dbe2fc',
                    borderWidth: 2,
                    hoverBackgroundColor: '#dbe2fc',
                    hoverBorderWidth: 0,
                    borderColor: '#dbe2fc',
                    hoverBorderColor: '#dbe2fc'
                  }]
                },
                options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  layout: {
                    padding: {
                      left: 0,
                      right: 0,
                      top: 0,
                      bottom: 0
                    }
                  },
                  tooltips: {
                    enabled: false
                  },
                  scales: {
                    yAxes: [{
                      gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)"
                      },
                      scaleLabel: {
                        display: false
                      },
                      ticks: {
                        beginAtZero: true,
                        stepSize: 25,
                        suggestedMin: 0,
                        suggestedMax: 100,
                        fontColor: "#8492a6",
                        userCallback: function userCallback(tick) {
                          return tick.toString() + '%';
                        }
                      }
                    }],
                    xAxes: [{
                      barPercentage: 0.15,
                      barValueSpacing: 0,
                      barDatasetSpacing: 0,
                      barRadius: 0,
                      stacked: true,
                      ticks: {
                        beginAtZero: true,
                        fontColor: "#8492a6"
                      },
                      gridLines: {
                        color: "rgba(142, 156, 173,0.1)",
                        display: false
                      }
                    }]
                  },
                  legend: {
                    display: false
                  },
                  elements: {
                    point: {
                      radius: 0
                    }
                  }
                }
              });

              /*----- Employees ------*/

              var options = {
                series: [74, 35],
                chart: {
                  height: 300,
                  type: 'donut'
                },
                dataLabels: {
                  enabled: false
                },
                legend: {
                  show: false
                },
                stroke: {
                  show: true,
                  width: 0
                },
                plotOptions: {
                  pie: {
                    donut: {
                      size: '80%',
                      background: 'transparent',
                      labels: {
                        show: true,
                        name: {
                          show: true,
                          fontSize: '29px',
                          color: '#6c6f9a',
                          offsetY: -10
                        },
                        value: {
                          show: true,
                          fontSize: '26px',
                          color: undefined,
                          offsetY: 16,
                          formatter: function formatter(val) {
                            return val + "%";
                          }
                        },
                        total: {
                          show: true,
                          showAlways: false,
                          label: 'Total',
                          fontSize: '22px',
                          fontWeight: 600,
                          color: '#373d3f' // formatter: function (w) {
                          //   return w.globals.seriesTotals.reduce((a, b) => {
                          // 	return a + b
                          //   }, 0)
                          // }

                        }
                      }
                    }
                  }
                },
                responsive: [{
                  options: {
                    legend: {
                      show: false
                    }
                  }
                }],
                labels: ["Male", "Female"],
                colors: ['#3366ff', '#fe7f00']
              };
              var chart = new ApexCharts(document.querySelector("#employees"), options);
              chart.render(); //________ Datepicker

              $(".fc-datepicker").datepicker({
                dateFormat: "dd M yy",
                monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec"]
              }); //________ Timepiocker

              $('#tpBasic').timepicker(); //________ Countdonwtimer

              $("#clocktimer").countdowntimer({
                currentTime: true,
                size: "md",
                borderColor: "transparent",
                backgroundColor: "transparent",
                fontColor: "#313e6a" //timeZone : -1 //

              });
    }

    });
