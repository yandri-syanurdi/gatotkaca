
<html>
  <head>
    <title>Gatotkaca!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="./static/css/result.css" rel="stylesheet" />
    <meta property="og:title" content="Gatotkaca! Mesin pencari apa saja." />
    <!-- <meta property="og:url" content="https://gatotkaca.mooo.info" /> -->
    <meta property="og:url" content="localhost/gatotkaca/" />
    <!-- <meta property="og:image" content="https://gatotkaca.mooo.info/static/images/og-facebook-gatotkaca.jpg" /> -->
    <meta property="og:image" content="./static/images/og-facebook-gatotkaca.jpg" />
    <meta property="og:site_name" content="Gatotkaca" />
    <meta property="og:description" content="Gatotkaca! Mesin pencari apa saja. Karya anak kopi paste." />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@lantip" />
  </head>
  <body>
    <div id="clouds">
      <div class="cloud x1"></div>
      <!-- Time for multiple clouds to dance around -->
      <div class="cloud x2"></div>
      <div class="cloud x3"></div>
      <div class="cloud x4"></div>
      <div class="cloud x5"></div>
    </div>
    <div class="wrapper pointer-events-none"></div>
    <div class="flex_wrapper pointer-events-none"></div>
    <div class="s004">
      <form method="post" action="/">
        <fieldset>
          <legend>
            <span>G</span>
            <span>a</span>
            <span>t</span>
            <span>o</span>
            <span>t</span>
            <span>k</span>
            <span>a</span>
            <span>c</span>
            <span>a</span>
            <span>!</span>
          </legend>
          <div class="inner-form">
            <div class="input-field">
              <input class="form-control" type="search" placeholder="Type to search..." name="search" />
              <button class="btn-search" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </button>
            </div>
          </div>
        </fieldset>
        <div class="result">Hasil pencarian untuk kata "tes":</div>
        <!-- <div class="result">Hasil pencarian untuk kata "<?php echo $_GET['search']; ?>":</div> -->
      </form>
    </div>    
<script>
  function init() {
  
  const colors = [
    {
      a: 'navy',
      b: '#fff',
      c: '#f3e412',
      d: '#0482d6',
    },
    {
      a: '#f83b3b',
      b: 'pink',
      c: 'yellow',
      d: '#fc65c9',
    },
    {
      a: '#fff',
      b: '#3b3bca',
      c: '#9953f5',
      d: '#67fdf1',
    },
    {
      a: 'navy',
      b: '#a6e1fc',
      c: '#9df312',
      d: '#ffef5d',
    }
  ]
  
  const planeSvg = () =>{
    const { a, b, c, d } = colors[Math.floor(Math.random() * colors.length)]
    return `<svg x="0px" y="0px" width="100%" height="100%" viewBox="0 0 52 26"><path fill="${a}" d="M 35 2h1v1h-1v-1"/> <path fill="${a}" d="M 42 2h1v1h-1v-1"/> <path fill="${a}" d="M 9 3h1v1h-1v-1"/> <path fill="${a}" d="M 16 3h1v1h-1v-1"/> <path fill="${a}" d="M 34 3h1v6h-1v-6"/> <path fill="${b}" d="M 35 3h1v1h1v1h4v-1h1v-1h1v6h-1v1h-6v-1h-1v-6"/> <path fill="${a}" d="M 36 3h1v1h-1v-1"/> <path fill="${a}" d="M 41 3h1v1h-1v-1"/> <path fill="${a}" d="M 43 3h1v6h-1v-6"/> <path fill="${a}" d="M 8 4h1v6h-1v-6"/> <path fill="${b}" d="M 9 4h1v1h1v1h4v-1h1v-1h1v6h-1v1h-6v-1h-1v-6"/> <path fill="${a}" d="M 10 4h1v1h-1v-1"/> <path fill="${a}" d="M 15 4h1v1h-1v-1"/> <path fill="${a}" d="M 17 4h1v6h-1v-6"/> <path fill="${a}" d="M 37 4h4v1h-4v-1"/> <path fill="${a}" d="M 11 5h4v1h-4v-1"/> <path fill="${c}" d="M 23 6h2v6h-1v-1h-1v-1h-3v-1h1v-1h1v-1h1v-1"/> <path fill="${a}" d="M 36 6h1v2h-1v-2"/> <path fill="${a}" d="M 41 6h1v2h-1v-2"/> <path fill="${c}" d="M 49 6h2v6h-1v-1h-1v-1h-3v-1h1v-1h1v-1h1v-1"/> <path fill="${a}" d="M 10 7h1v2h-1v-2"/> <path fill="${a}" d="M 15 7h1v2h-1v-2"/> <path fill="${a}" d="M 38 8h2v1h-2v-1"/> <path fill="${a}" d="M 12 9h2v1h-2v-1"/> <path fill="${a}" d="M 35 9h1v1h-1v-1"/> <path fill="${a}" d="M 42 9h1v1h-1v-1"/> <path fill="${d}" d="M 5 10h3v1h1v1h1v1h6v-1h1v-1h1v-1h5v1h1v1h1v2h-4v1h1v1h1v1h-1v1h-5v-3h-1v-1h-6v1h-1v3h-6v-1h-1v-1h-1v-3h1v-1h1v-1h2v-1"/> <path fill="${c}" d="M 8 10h1v1h-1v-1"/> <path fill="${a}" d="M 9 10h1v1h-1v-1"/> <path fill="${a}" d="M 16 10h1v1h-1v-1"/> <path fill="${c}" d="M 17 10h1v1h-1v-1"/> <path fill="${d}" d="M 31 10h3v1h1v1h1v1h6v-1h1v-1h1v-1h5v1h1v1h1v2h-4v1h1v1h1v1h-1v1h-5v-3h-1v-1h-6v1h-1v3h-6v-1h-1v-1h-1v-3h1v-1h1v-1h2v-1"/> <path fill="${c}" d="M 34 10h1v1h-1v-1"/> <path fill="${b}" d="M 35 10h1v1h-1v-1"/> <path fill="${a}" d="M 36 10h6v1h-6v-1"/> <path fill="${b}" d="M 42 10h1v1h-1v-1"/> <path fill="${c}" d="M 43 10h1v1h-1v-1"/> <path fill="${c}" d="M 9 11h1v1h-1v-1"/> <path fill="${a}" d="M 10 11h6v1h-6v-1"/> <path fill="${c}" d="M 16 11h1v1h-1v-1"/> <path fill="${c}" d="M 35 11h1v1h-1v-1"/> <path fill="${b}" d="M 36 11h6v1h-6v-1"/> <path fill="${c}" d="M 42 11h1v1h-1v-1"/> <path fill="${c}" d="M 10 12h6v1h-6v-1"/> <path fill="${c}" d="M 36 12h6v1h-6v-1"/> <path fill="${c}" d="M 10 14h6v1h1v7h-1v1h-3v-1h-1v-1h-1v-1h-1v-1h-1v-4h1v-1"/> <path fill="${c}" d="M 21 14h4v4h-1v-1h-1v-1h-1v-1h-1v-1"/> <path fill="${c}" d="M 36 14h6v1h1v7h-1v1h-3v-1h-1v-1h-1v-1h-1v-1h-1v-4h1v-1"/> <path fill="${c}" d="M 47 14h4v4h-1v-1h-1v-1h-1v-1h-1v-1"/></svg>`
  }
  
  const rope = () =>{
    const a = '#fff'
    return `
    <div class="rope">
      <svg x="0px" y="0px" width="100%" height="100%" viewBox="0 0 26 26">
        <path fill="${a}" d="M 24 9h1v1h-1v-1"/> <path fill="${a}" d="M 23 10h1v1h-1v-1"/> <path fill="${a}" d="M 22 11h1v1h-1v-1"/> <path fill="${a}" d="M 21 12h1v1h-1v-1"/> <path fill="${a}" d="M 1 13h20v1h-20v-1"/> <path fill="${a}" d="M 21 14h1v1h-1v-1"/> <path fill="${a}" d="M 22 15h1v1h-1v-1"/> <path fill="${a}" d="M 23 16h1v1h-1v-1"/> <path fill="${a}" d="M 24 17h1v1h-1v-1"/>
      </svg>
    </div>`
  }
  
  const planeTimer = []
  const wrapper = document.querySelector('.wrapper')
  const cellD = 60
  const topValues = [0.5,1.5,2.5,3.5]
  let bannerContent = 'Ya#ndak#tahu#kok#tanya#saya..'
  const banners = []
  let spriteId = 0
  let topIndex = 3
  let count = 0
  let bannerIndex = 0
  
  const animate = (actor, frame, cellD) =>{
    const leftV = +(actor.style.left).replace('px','')
    let newLeftV = leftV - cellD
    newLeftV = newLeftV < ((-1 * (frame - 1)) * cellD) ? 0 : newLeftV
    actor.style.left = `${newLeftV}px`
  }
  
  const bop = (actors, index) =>{
    const actor = actors[index]
    const motion = 6
    const topV = actor.dataset.top ? actor.dataset.top : motion
    const newTopV = +topV === motion ? -motion : motion
    actor.style.top = `${newTopV}px`
    actor.dataset.top = newTopV
    if (actor.classList.contains('front')) actor.childNodes[3].style.transform = `rotate(${newTopV / (motion / -2)}deg)`
    setTimeout(()=>{
      const newIndex = index >= (actors.length - 1) ? 0 : index + 1
      bop(actors,newIndex)
    },120)
  }
  
  const mapModules = words =>{
    return words.map(word =>{
      return `
      <div class="message module module_${spriteId}">
        ${word}
      </div>
      `
    }).join('')
  }
  
  const createPlane = sentence =>{
    const plane = document.createElement('div')
    spriteId++
    plane.classList.add('plane_wrapper')
    plane.innerHTML = `
    <div class="front module module_${spriteId}">
      <div class="sprite_container">
        <div class="sprite sprite_${spriteId}">
          <img src="./static/images/gatot.png" />
        </div>    
      </div>
      ${rope()}
    </div>    
    ${mapModules(sentence.split(' '))}
    `
    wrapper.append(plane)
    const sprite = document.querySelector(`.sprite_${spriteId}`)
    setInterval(()=>{
      animate(sprite, 2, cellD)
    },200)
    const modules = document.querySelectorAll(`.module_${spriteId}`)
    bop(modules,0)
    topIndex = (topIndex + 1) < topValues.length
      ? topIndex + 1
      : 0
  
    if (count === banners.length) {
      topIndex = 0
      count = 0
      return
    }
    plane.style.top = `${topValues[topIndex] * plane.offsetHeight + (20 * topValues[topIndex])}px`
  
    plane.style.left = '100%'
    plane.style.transition = '6s ease'
    
    planeTimer[bannerIndex].timerOne = setTimeout(()=>{
      plane.style.left = '10%'
    },100)
    planeTimer[bannerIndex].timerTwo = setTimeout(()=>{
      plane.style.left = `-${plane.offsetWidth + 200}px`
    },8000)
    planeTimer[bannerIndex].timerThree = setTimeout(()=>{
      wrapper.removeChild(plane)
      const planeNo = document.querySelectorAll('.plane_wrapper').length
      if ((count === banners.length && planeNo < banners.length)){
        topIndex = 3
        count = 0
        createPlanes()
      }
    }, 30000)
  }
  
  const calcWrapIndex = () =>{
    const flexWrapper = document.querySelector('.flex_wrapper')
    const wrapIndex = []
    flexWrapper.innerHTML = bannerContent.split('#').map(word=>{
      return `
        <div class="message_ghost">
          ${word}
        </div>
      `
    }).join('')
    const messageGhosts = document.querySelectorAll('.message_ghost')
    messageGhosts.forEach((message,i)=>{
      if (i === (messageGhosts.length - 1)) return
      if (message.getBoundingClientRect().y < messageGhosts[i + 1].getBoundingClientRect().y){
        wrapIndex.push(i)
      }
    })
    return wrapIndex
  }
  
  const splitTextForBanners = () =>{
    //* banners populated based on page width
    banners.length = 0
    const word = []
    const wrapIndex = calcWrapIndex()
    let hashCount = -1
    bannerContent.split('').forEach((letter,i)=>{
      if (letter === '#') hashCount++
      word.push(letter)
      if ((wrapIndex.find(i=>i === hashCount) && letter === '#')){
        banners.push(word.join(''))
        word.length = 0
      }
      if (i === (bannerContent.length - 1)) banners.push(word.join(''))
    })
  }
  
  const createTimers = () =>{
    planeTimer.length = 0
    banners.forEach(()=>{
      planeTimer.push({
        timerOne: null,
        timerTwo: null,
        timerThree: null,
      })
    })
  }
  
  const createPlanes = () =>{  
    const bannerText = banners[bannerIndex].split('').reverse().join('')[0] === '#'
      ? banners[bannerIndex]
      : banners[bannerIndex] += '#'
  
    if (bannerText !== '#') createPlane(bannerText.replaceAll('#',' '))
    bannerIndex = (bannerIndex + 1) < banners.length
      ? bannerIndex + 1
      : 0 
  
    if (bannerIndex === 0) spriteId = 0
  
    count++
    setTimeout(()=>{
      if (count === banners.length) return
      createPlanes()
    },3000)
  }
  
  const resetPlanes = () =>{
    planeTimer.forEach(timers=>{
      clearTimeout(timers.timerOne)
      clearTimeout(timers.timerTwo)
      clearTimeout(timers.timerThree)
    })
    wrapper.innerHTML = ''
    spriteId = 0
    topIndex = 3
    count = 0
    bannerIndex = 0
    splitTextForBanners()
    createTimers()
    createPlanes()
  }
  
  splitTextForBanners()
  createTimers()
  createPlanes()
  
  window.addEventListener('resize', resetPlanes)
  
  }
  
  window.addEventListener('DOMContentLoaded', init)  
  </script>
  </body>  
</html>