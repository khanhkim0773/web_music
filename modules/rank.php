<div class="rank">
            <p class="rank-title"><i class="rank-title fa-solid fa-ranking-star"></i>Bảng xếp hạng </p>
            <div class="tabs">
                <div class="tab-item">
                    Việt Nam
                </div>
                <div class="tab-item border">

                    Âu mỹ
                </div>
                <div class="tab-item">
                    Hàn Quốc
                </div>
            </div>

            <div class="rank-songs">
                <script>
                    const rankSongContainer = document.querySelector('.rank-songs');
                    let rankSongHtml = '';
                    for (let i = 0; i < 8; i++) {
                        rankSongHtml += `
                            <div class="rank-song">
                                <div class="rank-img">
                                    <div class="rank-number">${i + 1}</div>
                                    <img src="./assets/img/logo/Songs_to_Calm_Your_Mind_1080x.webp" alt="">
                                </div>
                                
                                <div class="song-info">
                                    <p class="info">Nơi này có anh <i class="info fa-regular fa-heart"></i> <i class="info fa-solid fa-ellipsis-vertical"></i></p>
                                    <p class="info">Sơn Tùng MTP</p>
                                </div>
                            </div>`;
                    }
                    rankSongContainer.innerHTML = rankSongHtml;
                </script>           
            </div>
        </div>