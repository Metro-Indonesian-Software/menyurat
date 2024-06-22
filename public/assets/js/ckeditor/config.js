function createCKEDITOR(elem) {
    ClassicEditor.create(elem, {
        toolbar: {
            items: [
                "undo",
                "redo",
                "|",
                "heading",
                "bold",
                "italic",
                "blockQuote",
                "bulletedList",
                "numberedList",
                "outdent",
                "indent",
            ],
            shouldNotGroupWhenFull: true,
        },
        heading: {
            options: [
                {
                    model: "paragraph",
                    title: "Paragraph",
                    class: "ck-heading_paragraph",
                },
                {
                    model: "heading1",
                    view: "h1",
                    title: "Heading 1",
                    class: "ck-heading_heading1",
                },
                {
                    model: "heading2",
                    view: "h2",
                    title: "Heading 2",
                    class: "ck-heading_heading2",
                },
                {
                    model: "heading3",
                    view: "h3",
                    title: "Heading 3",
                    class: "ck-heading_heading3",
                },
                {
                    model: "heading4",
                    view: "h4",
                    title: "Heading 4",
                    class: "ck-heading_heading4",
                },
                {
                    model: "heading5",
                    view: "h5",
                    title: "Heading 5",
                    class: "ck-heading_heading5",
                },
                {
                    model: "heading6",
                    view: "h6",
                    title: "Heading 6",
                    class: "ck-heading_heading6",
                },
            ],
        },
    })
        .then((editor) => {
            editor.model.document.on("change:data", (evt, data) => {
                const id = editor.sourceElement
                    .getAttribute("id")
                    .split("_")[1];

                document.getElementById(
                    `sections_${id}_content_data`
                ).innerHTML = editor.getData();
            });
        })
        .catch((error) => {
            console.error(error);
        });
}

for (let ckeditor of document.querySelectorAll(".ckeditor")) {
    createCKEDITOR(ckeditor);
}