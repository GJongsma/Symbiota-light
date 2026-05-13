const labels = document.querySelectorAll(".label");
labels.forEach((label) => {
  // label.style.position = "relative";
  const fieldBlock = label.querySelector('.eventdate')?.closest('.field-block');
  fieldBlock.style.display = "flex";
  fieldBlock.style.justifyContent = "space-between";
  fieldBlock.style.alignItems = "center";
});
