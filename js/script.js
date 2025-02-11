// Function to fetch and display news articles
function fetchNewsArticle(articleId,index) {
    // Define the API URL
    const apiUrl = `ajax/ajax.php?article=${articleId}`;

    // Use the Fetch API to get data
    fetch(apiUrl)
        .then(response => {
            if (!response.ok) 
            {
                throw new Error('Failed to fetch data');
            }

            return response.json();
        })
        .then(data => {
            // Process the returned data and display it
            console.log(data);

            
            displayNewsArticle(data,index);
            displayNewsArticle(data,index);
        })
        .catch(error => {
            console.error('Error fetching article:', error);
        });
}



function displayNewsArticle(data, index) {
    const newsItems = document.querySelectorAll('.news-item');

    if (index < newsItems.length) {
        const newsBox = newsItems[index].querySelector('.news-box');

        if (newsBox) {
            // Select the date and content elements
            const dateElement = newsBox.querySelector('p.mb-1'); 
            const contentElement = newsBox.querySelectorAll('p')[1]; 

            // Update the content dynamically
            dateElement.innerHTML = `${data.date.day} ${data.date.month.toUpperCase()} ${data.date.year}`;
            contentElement.innerHTML = `${data.content[0]} ...`;

            // Find or add the +info button
            let infoButton = newsBox.querySelector('button.btn-link');
            
            // If the button does not exist, create it dynamically
            if (!infoButton) {
                infoButton = document.createElement('button');
                infoButton.classList.add('btn', 'btn-link', 'align-self-end');
                infoButton.innerText = '+info';
                newsBox.appendChild(infoButton);
            }

            // Add the functionality to the +info button
            infoButton.onclick = () => openFullArticle(data.id);
        }
    }
}

// Function to handle "+info" button (optional)
function openFullArticle(articleId) {
    window.location.href = `article.html?id=${articleId}`;
}

// Call the function to fetch and display articles (example for articles 1, 2, and 3)
fetchNewsArticle(1,0);
fetchNewsArticle(2,1);
fetchNewsArticle(3,2);
