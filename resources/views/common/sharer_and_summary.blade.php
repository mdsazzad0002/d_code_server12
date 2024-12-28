<div class="">
    <div class="btn-group">
        <button class="btn btn-primary" onclick="copy_to_clipboard()"><i class="fa fa-files-o" aria-hidden="true"></i> Copy</button>
        <button class="btn btn-secondary" onclick="share_window()"><i class="fa fa-share-square-o" aria-hidden="true"></i> Share</button>
    </div>
</div>


<script>
    async function share_window() {
        // Check if the Web Share API is supported
        if (navigator.share) {
            try {
                let shareData = {
                    title: document.querySelector('title').innerHTML,
                    text: document.querySelector('meta[name=description]').getAttribute('content'),
                    url: window.location.href, // Use window.location.href to get the current URL
                };
    
                // Call the Web Share API
                await navigator.share(shareData);
                console.log('Share was successful!');
            } catch (error) {
                console.error('Error sharing:', error);
            }
        } else {
            console.log('Web Share API is not supported in this browser.');
            // Optionally, provide a fallback action here (like showing a custom share dialog)
        }
    }

    
    async function copy_to_clipboard() {
        try {
            // Gather the content to be copied
            let contentToCopy = `
                Title: ${document.querySelector('title').innerHTML}
                Description: ${document.querySelector('meta[name=description]').getAttribute('content')}
                URL: ${window.location.href}
            `;
            
            // Copy the content to the clipboard
            await navigator.clipboard.writeText(contentToCopy);
            
            // Success message or confirmation
            console.log('Content copied to clipboard!');
            alert('Content copied to clipboard!');
        } catch (error) {
            console.error('Error copying text:', error);
        }
    }
    
      
</script>