function toggleAccordion(index) {
    const content = document.getElementById(`content-${index}`);
    const icon = document.getElementById(`icon-${index}`);

    // SVG for Minus icon
    const minusSVG = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
      <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
    </svg>
  `;

    // SVG for Plus icon
    const plusSVG = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
      <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
    </svg>
  `;

    // Toggle the content's max-height for smooth opening and closing
    if (content.style.maxHeight && content.style.maxHeight !== "0px") {
        content.style.maxHeight = "0";
        icon.innerHTML = plusSVG;
    } else {
        content.style.maxHeight = content.scrollHeight + "px";
        icon.innerHTML = minusSVG;
    }
}

let fieldCount = 1;
document.getElementById("add-field").addEventListener("click", function () {
    const container = document.getElementById("dynamic-fields");
    const newField = document.createElement("div");
    newField.classList.add("field");
    newField.innerHTML = `
                                <div class="grid grid-cols-2 gap-4">
                                            <div class="w-full ">
                                                <label class="block mb-2 text-sm text-slate-600">
                                                    Name
                                                </label>
                                                <input type="text" name="employees[${fieldCount}][name]"
                                                    class="w-full bg-transparent placeholder:text-slate-40 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                                    placeholder="Name.." />
                                            </div>
                                            <div class="w-full ">
                                                <label class="block mb-2 text-sm text-slate-600">
                                                    Position
                                                </label>
                                                <input type="text" name="employees[${fieldCount}][position]"
                                                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                                    placeholder="Position.." />
                                            </div>
                                        </div>
                                `;
    container.appendChild(newField);
    fieldCount++;
});
