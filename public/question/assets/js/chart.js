// const chartData = {
//   labels: ["Sangat Puas", "Puas", "Cukup Puas", "Tidak Puas", "Sangat Tidak Puas"],
//   data: [30, 17, 10, 7, 30],
// };

// const tataPamongChart = document.getElementById("tata-pamong-chart");
// const penelitianChart = document.getElementById("penelitian-chart");

// const tataPamongDetails = document.getElementById("tata-pamong-details");
// const penelitianDetails = document.getElementById("penelitian-details");

// new Chart(tataPamongChart, {
//   type: "doughnut",
//   data: {
//       labels: chartData.labels,
//       datasets: [
//           {
//               label: "Tingkat Kepuasan",
//               data: chartData.data,
//           },
//       ],
//   },
//   options: {
//       borderWidth: 10,
//       borderRadius: 2,
//       hoverBorderWidth: 0,
//       plugins: {
//           legend: {
//               display: false,
//           },
//       },
//   },
// });

// new Chart(penelitianChart, {
//   type: "doughnut",
//   data: {
//       labels: chartData.labels,
//       datasets: [
//           {
//               label: "Tingkat Kepuasan",
//               data: chartData.data,
//           },
//       ],
//   },
//   options: {
//       borderWidth: 10,
//       borderRadius: 2,
//       hoverBorderWidth: 0,
//       plugins: {
//           legend: {
//               display: false,
//           },
//       },
//   },
// });

// const populateUl = (ul, chartData) => {
//   ul.innerHTML = "";
//   chartData.labels.forEach((l, i) => {
//       let li = document.createElement("li");
//       li.innerHTML = `${l}: <span class='percentage'>${chartData.data[i]}%</span>`;
//       ul.appendChild(li);
//   });
// };

// populateUl(tataPamongDetails, chartData);
// populateUl(penelitianDetails, chartData);
