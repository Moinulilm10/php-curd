<script>
    document.addEventListener("DOMContentLoaded", function () {
        const selectAllCheckbox = document.getElementById("selectAll");
        const checkboxes = document.querySelectorAll(".checkboxItem");
        const selectedCountDisplay = document.getElementById("selectedCount");

        function updateSelectedCount() {
            let selectedCount = document.querySelectorAll(".checkboxItem:checked").length;
            selectedCountDisplay.textContent = `Selected: ${selectedCount}`;
        }

        // "Select All" checkbox functionality
        selectAllCheckbox.addEventListener("change", function () {
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
            updateSelectedCount();
        });

        // Update count on individual checkbox click
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener("change", updateSelectedCount);
        });
    });
</script>
