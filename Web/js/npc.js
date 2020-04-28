
define(['character'], function(Character) {

    var NpcTalk = {
        "guard": [
            "你好",
            "我们不需要看你的身份证",
            "你不是我们要找的冒险者",
            "向前，向前..."
        ],
    
        "king": [
            "你好，我是这里的国王",
            "我掌管着这片土地",
            "像老板一样",
            "我和人民交谈",
            "像老板一样",
            "我带着皇冠",
            "像老板一样",
            "我每天无所事事",
            "像老板一样",
            "现在，离我远点！",
            "像老板一样"
        ],
    
        "villagegirl": [
            "嗨，冒险家！",
            "你觉得这个游戏怎么样？",
            "这一切都发生在一个网页上！这不是很疯狂吗？",
            "多亏了WebSockets，让这一切都成为可能。",
            "我对此知之甚少，毕竟我只是一个程序。",
            '为什么不读一读 <a target="_blank" href="http://hacks.mozilla.org/2012/03/browserquest/">这篇博文</a> 来学一学呢？'
        ],
    
        "villager": [
            "你好陌生人。你喜欢诗歌吗？",
            "满堂花醉三千客,一剑霜寒十四州。",
            "我喜欢捕猎老鼠，你也喜欢...",
            "老鼠死了，现在做什么？",
            "老实说，我不知道。",
            "也许森林会让你感兴趣...",
            "或者，做一份炖鼠汤？"
        ],
    
        "agent": [
            "别尝试把剑弄弯",
            "那是不可能的",
            "相反，只试着去认识真相...",
            "没有剑。"
        ],
    
        "rick": [
            "我们对爱情并不陌生",
            "你知道规则，我也知道",
            "我想的是完全的承诺",
            "你不会从其他人那里得到这个",
            "我只想告诉你我的感觉",
            "必须让你明白：",
            "永远不会放弃你",
            "永远不会让你失望",
            "永远不要跑来跑去抛弃你",
            "永远不会让你哭",
            "永远不会说再见",
            "永远不会说谎伤害你"
        ],
        
        "scientist": [
            "幸会",
            "我是这两种药水的发明者。",
            "红色的会补充你的生命值...",
            "橙色的会把你变成火狐，让你战无不胜...",
            "但它只会持续很短一段时间。",
            "所以好好利用它！",
            "如果你不介意的话，我现在要回去做实验了..."
        ],
    
        "nyan": [
            "nyan nyan nyan nyan nyan",
            "nyan nyan nyan nyan nyan nyan nyan",
            "nyan nyan nyan nyan nyan nyan",
            "nyan nyan nyan nyan nyan nyan nyan nyan"
        ],
        
        "beachnpc": [
            "lorem ipsum dolor sit amet",
            "consectetur adipisicing elit, sed do eiusmod tempor"
        ],
        
        "forestnpc": [
            "lorem ipsum dolor sit amet",
            "consectetur adipisicing elit, sed do eiusmod tempor"
        ],
        
        "desertnpc": [
            "lorem ipsum dolor sit amet",
            "consectetur adipisicing elit, sed do eiusmod tempor"
        ],
        
        "lavanpc": [
            "lorem ipsum dolor sit amet",
            "consectetur adipisicing elit, sed do eiusmod tempor"
        ],
    
        "priest": [
            "哦，你好，年轻人。",
            "智慧就是一切，所以我会和你分享一些攻略",
            "在这个世界上，你可以自由地去任何你喜欢的地方",
            "但要注意等待你的众多敌人。",
            "你可以通过杀死敌人来获取武器和盔甲。",
            "敌人越强，奖励就会越高。",
            "您还可以通过探索和狩猎来解锁成就。",
            "单击小杯图标可查看所有成就的列表。",
            "请多呆一会儿，享受BrowserQuest的诸多惊喜",
            "再见，年轻的朋友。"
        ],
        
        "sorcerer": [
            "啊...我已经预见到你会来看我。",
            "怎么？你觉得我的新法杖怎么样？",
            "很酷，嗯？",
            "你问，我从哪里得到的？",
            "我明白。这很容易遭人嫉妒。",
            "实际上是我自己用我疯狂的巫师技能制作的。",
            "但是让我告诉你一件事...",
            "这个游戏里有很多物品。",
            "一些十分强大的装备。",
            "探索是找到它们的关键。",
            "祝你好运。"
        ],
        
        "octocat": [
            "欢迎来到BrowserQuest!",
            "想看看源代码吗？",
            '查看<a target="_blank" href="http://github.com/mozilla/BrowserQuest">GitHub上仓库</a>'
        ],
        
        "coder": [
            "嗨！您知道您也可以在平板电脑或手机上玩像素大冒险吗？",
            "这就是HTML5的美妙之处！",
            "试一试吧"
        ],
    
        "beachnpc": [
            "别介意我，我只是来度假的。",
            "我不得不说...",
            "这些巨型螃蟹有点烦人。",
            "你能帮我把它们处理掉吗?"
        ],
        
        "desertnpc": [
            "人们不会简单地走进这些山...",
            "据说一位古代亡灵领主住在这里。",
            "没人知道他长什么样...",
            "因为没有人能活着讲述这个故事。",
            "现在转身回家还不算太晚，孩子。"
        ],
    
        "othernpc": [
            "lorem ipsum",
            "lorem ipsum"
        ]
    };

    var Npc = Character.extend({
        init: function(id, kind) {
            this._super(id, kind, 1);
            this.itemKind = Types.getKindAsString(this.kind);
            this.talkCount = NpcTalk[this.itemKind].length;
            this.talkIndex = 0;
        },
    
        talk: function() {
            var msg = null;
        
            if(this.talkIndex > this.talkCount) {
                this.talkIndex = 0;
            }
            if(this.talkIndex < this.talkCount) {
                msg = NpcTalk[this.itemKind][this.talkIndex];
            }
            this.talkIndex += 1;
            
            return msg;
        }
    });
    
    return Npc;
});