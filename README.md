# geeksforgeeks

All geeksforgeeks problems to pdf.

All the scraped content (till 04/29/15) for each topic is currently in their respective `<topic_name>_a5.pdf` in root folder, where a_5 corresponds to the page size of the rendered content.

If you want the latest content just download the repository and host it with *XAMPP* (place the `geeksforgeeks` directory in *XAMPP* `htdocs` folder).

Oh wait! Small change in `index.php` contained in root folder needs to be made. If you are under a proxy, the settings need to be updated on lines `82, 83, 97, 146, 159`. Else, just *comment* **unwanted part** of lines `146, 159`.

`chmod` the root directory (recursively) to `777`. (`chmod -R 777 .`)

Now, Start your Apache server through *XAMPP* control panel and go to `http://localhost/geeksforgeeks/`,  which gives you links for html pages for each topic(for each category/tag), upon clicking which opens the content in html format.

If you want html pages to get rendered in form a pdf, download `wkhtmltopdf` on your machine and run the respective batch/shell script (generate_pdfs.bat/generate_pdfs.sh present in root location) depending upon the type of OS. You should have pdfs for the respective topics in that folder where the batch script is present(make sure you have write permissions for the directory you are trying to write pdfs in).
