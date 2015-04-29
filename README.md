# geeksforgeeks

All geeksforgeeks problems to pdf.

All the scraped content for each topic is currently in their respective <topic_name>_a5.pdf, where a_5 corresponds to the page size of the rendered content.

If you want the latest content just download the repository and host it with xampp and that gives you links for html pages for each topic(for each category/tag), upon clicking which opens the content in html format.

If you want html pages to get rendered in form a pdf, download `wkhtmltopdf` on your machine and run the respective batch/shell script (generate_pdfs.bat/generate_pdfs.sh present in root location) depending upon the type of OS. You should have pdfs for the respective topics in that folder where the batch script is present(make sure you have write permissions for the directory you are trying to write pdfs in).
