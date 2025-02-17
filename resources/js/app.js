

// Import jsTree and its CSS
import $ from 'jquery';  // Import jQuery
import "jstree";
import "jstree/dist/themes/default/style.min.css";
// Ensure the DOM is loaded before initialization
document.addEventListener("DOMContentLoaded", () => {
    const knobElement = document.getElementById("knob");
    if (knobElement) {
        $(knobElement).knob({
            min: 0,
            max: 100,
            width: 120,
            height: 120,
            fgColor: "#ff0000", // Foreground color
            bgColor: "#eeeeee", // Background color
            thickness: 0.2,
            displayInput: true,
        });
    }
});
// Initialize jsTree without relying on document.ready
const treeElement = document.getElementById("tree");
if (treeElement) {
    $.getJSON("/get-tree-data", function (data) {
        // Initialize jsTree
        $("#tree").jstree({
            core: {
                data: data, // Use the fetched data
                themes: {
                    dots: true, // Show connecting dots
                    icons: true, // Enable icons globally
                },
                multiple: false, // Disable multi-selection
            },
            types: {
                default: {},
            },
            plugins: ["types", "search", "contextmenu"], // Enable "contextmenu" plugin
            contextmenu: {
                items: function (node) {
                    return {
                        addItem: {
                            label: "ინიციატივის გაგზავნა",
                            action: function (data) {
                                var inst = $.jstree.reference(data.reference);
                                var newNode = inst.create_node(node, {
                                    text: "New Node",
                                });
                                inst.edit(newNode); // Allow user to rename it immediately
                            },
                            icon: "fa fa-arrow-right", // (Optional) FontAwesome icon
                        },
                    };
                },
            },
        });

        $("#tree").on("select_node.jstree", function (e, data) {
            var nodeName = data.node.text;
            document.getElementById("organisation_name").value = nodeName;
            var shareForm = document.querySelector(".share-form");
            if (nodeName != "") {
                shareForm.style.display = "block";
            }
        });
        // Live search functionality
        $("#search-input").on("keyup", function () {
            var searchString = $(this).val(); // Get the search query

            if (!searchString) {
                // If the search input is empty, show all nodes and reset everything
                $("#tree").jstree("show_all");
                $("#tree").jstree("deselect_all");
                $("#tree").jstree("close_all"); // Close all opened nodes
            } else {
                // Trigger jsTree search and only show matched nodes
                $("#tree").jstree("search", searchString);

                // After search, we want to show parent nodes of the found results
                var foundNodes = $("#tree").jstree("get_search").nodes;
                foundNodes.each(function (index, node) {
                    // Show all parent nodes of found nodes
                    var parents = $(node).parents();
                    parents.each(function () {
                        $("#tree").jstree("show_node", this);
                    });
                });
            }
        });
    });
}
document.addEventListener("DOMContentLoaded", function () {
    var treeElement = document.getElementById("tree");
    var organisationInput = document.getElementById("organisation_name");
    var shareForm = document.querySelector(".share-form");

    // Ensure the form is hidden initially if the input is empty
    if (organisationInput.value.trim() === "") {
        shareForm.style.display = "none";
    }
});
