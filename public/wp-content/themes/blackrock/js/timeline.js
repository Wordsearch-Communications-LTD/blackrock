class Timeline {
    constructor(){
        this.timelineNavButtons = document.querySelectorAll('.timeline_nav button');
        this.timelineArticles = document.querySelectorAll('.timeline_data article');
        this.secondArticle = this.timelineArticles[1].getBoundingClientRect();
        this.closeArticleHeight = this.secondArticle.height + 20;
        this.timelineArticleHeaders = document.querySelectorAll('.timeline_data article header');
        this.timelineCloseButtons = document.querySelectorAll('.timeline_data article .close');
        this.setEventListeners();
    }

    setEventListeners(){
        this.timelineArticleHeaders.forEach(header => {
            header.addEventListener("click", e => {
                e.preventDefault();
                this.closeArticles();
                let headerLink = document.querySelector('.timeline_nav button[data-timeline-index="' + header.parentNode.dataset.timelineIndex + '"]');
                header.parentNode.classList.add('active');
                
                this.scrollToArticle(headerLink)
            });
        });
        
        this.timelineNavButtons.forEach(button => {
            button.addEventListener("click", e => {
                e.preventDefault();
                let article = document.querySelector('.timeline_data article[data-timeline-index="' + button.dataset.timelineIndex + '"]');
                this.closeArticles();
                button.classList.add('active');
                
                this.scrollToArticle(article);
            });
        });

        this.timelineCloseButtons.forEach(closeButton =>{
            closeButton.addEventListener("click", e =>{
                e.preventDefault();
                e.stopPropagation();
                this.closeArticles();     
            });
        });
    }

    scrollToArticle(article){
        let title = document.querySelector('.timeline_nav');
        let articleIndex = article.dataset.timelineIndex;
        let containerRect = title.getBoundingClientRect();
        let legalContent =  document.getElementById('legal-intro-text');
        let legalDimensions = (legalContent) ? legalContent.getBoundingClientRect() : 0;
        let calculatedPos = 0;

        article.classList.add('active');
 
        console.log(legalDimensions.height);

        if(legalContent){
            console.log();
            calculatedPos = (legalDimensions.height + (this.closeArticleHeight * articleIndex) + 50);
        }
        else {
            calculatedPos = ((containerRect.y + window.scrollY) + (this.closeArticleHeight * articleIndex))
        }

        window.scrollTo({
            top: calculatedPos,
            left: 0,
            behavior: 'smooth'
          });
    }

    closeArticles(){
        this.timelineArticles.forEach(article => {
            article.classList.remove('active');
        });
        
        this.timelineNavButtons.forEach(button => {
            button.classList.remove('active');
        });
    }

}



if(document.querySelectorAll('section.timeline')[0]){
    let timeline = new Timeline();
}