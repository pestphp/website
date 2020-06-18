import ClipboardJS from 'clipboard/dist/clipboard';

const clipboardIcon = `
    <svg fill="currentColor" class="fill-current h-6 w-6" viewBox="0 0 20 20">
        <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
        <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z">
    </path></svg>`;

const copiedIcon = `
    <svg fill="currentColor" class="fill-current text-white h-6 w-6" viewBox="0 0 20 20"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2
         0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd">
    </path></svg>`;

// Copy to Clipboard
let codeSnippets = document.querySelectorAll('pre');
codeSnippets.forEach((e, key) => {
    // Copy Button
    let clipButton = document.createElement('button');

    clipButton.innerHTML = clipboardIcon;
    clipButton.id = `clipButton-${key}`;
    clipButton.setAttribute('aria-label', 'Copy to Clipboard');
    clipButton.setAttribute('title', 'Copy to Clipboard');
    clipButton.classList.add('copyBtn');

    e.appendChild(clipButton);

    let clip = new ClipboardJS(`#${clipButton.id}`);


    clip.on('success', (e) => {
        clipButton.innerHTML = copiedIcon;
        e.clearSelection();
        setTimeout(() => {
            clipButton.innerHTML = clipboardIcon;
        }, 1500);
    });

    // Code Snippet
    let clipCode = e.querySelector('code');
    clipCode.id = `clipText-${key}`;
    clipButton.dataset.clipboardTarget = `#${clipCode.id}`;
});