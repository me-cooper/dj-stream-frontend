# DJ-Stream Frontend



This is a template if you want to mix music to public. I use Virtual DJ with this.



---



Demo: https://technobunker.club



---



## Customization

Just add GIFs as needed inside `./gifs`

Should be named as numbers from `1.gif` to `x.gif` (last number)  **gapless**.

These images will be displayed in the background automatically.



Add in your stream title and your stream URL inside `index.html` in the `<script>` part.

```javascript
let streamTitle = 'STREAM TITLE HERE';
let streamURL = 'https://your-stream-url-here.com';
```



Change the image update interval inside `index.html` in the `<script>` part.

```javascript
let changeImageInterval = 2500;
```



Have fun.





---



## Update Song Title



Via `https://your-domain.com/update_song_info.php?token=secrethere&song=Artist - Title` you can update your song title. This PHP script just update a `.json` file which contains the title. You can use node.js, python or whatever you want to update the file. You can even update it manually.


```json
{
    "song": "Joey Risdon - LSD Reaction"
}
```


This file is checked every 15s



```javascript
async function loadSongTitle() {
    try {
        const response = await fetch('currentsong.json');
        const data = await response.json();
        const title = data.song;

        updateSongTitle(title);

    } catch (error) {
        console.log('Failed to load json file', error);
    }
}

async function runInterval() {
    while (true) {
        await loadSongTitle();
        await new Promise(resolve => setTimeout(resolve, 15000));
    }
}

runInterval();
```



As VirtualDJ Songinfo does not work for me, I use 
https://www.christianwheel.com/post/titlestreamer-for-virtual-dj

to update current song. With this tool you can call a URL. Which is ``https://your-domain.com/update_song_info.php?token=secrethere&song=%song%` for this example.



