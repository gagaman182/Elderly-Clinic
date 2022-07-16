<template>
  <v-app dark>
    <v-navigation-drawer
      v-model="drawer"
      :mini-variant="miniVariant"
      :clipped="clipped"
      fixed
      app
    >
      <div class="justify-center text-center logohead">
        <v-icon large color="#313552"> mdi-domain </v-icon>
        <h3>กลุ่มงานเวชกรรมสังคม</h3>
        <p class="text--secondary">โรงพยาบาลหาดใหญ่</p>
      </div>
      <v-divider class="mx-4"></v-divider>
      <v-card class="mx-auto" max-width="434" tile>
        <!-- <v-img
          height="100%"
          src="https://hatyaihospital.go.th/web/site2019/images/2020-slide.jpg"
        ></v-img> -->
        <!-- <v-img
          height="100%"
          src="https://video.fhdy2-1.fna.fbcdn.net/v/t1.6435-9/67191996_2857987410896818_594038395588575232_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGamdQsL8Y2UCOsHHiRSjIQY9mcHcSYHwFj2ZwdxJgfAYiTp7zYmclIsZcm8AEst7pbHliJSLQJeb-o49c0oVMk&_nc_ohc=yVtqUMYMk88AX_OeGKN&_nc_oc=AQn1kHbfEkWCzE9l7yShf6CO9NlOgP6tx9fekBwZsuQqDa2kKT3KKiLYqCfEG_nhqXo5ejmjGnr34tOxzrLNYBK0&_nc_ht=video.fhdy2-1.fna&oh=00_AT-zbx2h7k21FJNCeQngbR_c8zIjDSagMTPGsbFiyuPKhw&oe=62B2690F
"
        ></v-img> -->

        <v-row class="fill-height" align="center" justify="center">
          <v-img :src="myImage"></v-img>
        </v-row>

        <!-- <v-list-item
          color="rgba(0, 0, 0, .4)"
          class="justify-center text-center logohead"
        >
          <v-list-item-content>
            <v-list-item-title class="title"
              >คลินิกผู้สูงอายุ
            </v-list-item-title>
            <v-list-item-subtitle>กลุ่มงานเวชกรรมสังคม </v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item> -->
      </v-card>

      <v-list class="max-v-list-height">
        <v-subheader>ฟอร์ม</v-subheader>
        <v-list-item
          v-for="(item, i) in items"
          :key="i"
          :to="item.to"
          router
          exact
          color="#947EC3"
        >
          <v-list-item-action>
            <fa :icon="item.icon" size="lg" color="#947EC3" />
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title v-text="item.title" class="" />
          </v-list-item-content>
        </v-list-item>
        <v-divider />
        <v-subheader>ส่งกลับ/ส่งต่อ</v-subheader>
        <v-list-item
          v-for="(item, i) in items_to"
          :key="i"
          :to="item.to"
          router
          exact
          color="#947EC3"
        >
          <v-list-item-action>
            <fa :icon="item.icon" size="lg" color="#947EC3" />
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title v-text="item.title" class="" />
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
    <v-app-bar :clipped-left="clipped" fixed app color="#6A67CE">
      <!-- <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
      <v-btn icon @click.stop="miniVariant = !miniVariant">
        <v-icon>mdi-{{ `chevron-${miniVariant ? 'right' : 'left'}` }}</v-icon>
      </v-btn>
      <v-btn icon @click.stop="clipped = !clipped">
        <v-icon>mdi-application</v-icon>
      </v-btn>
      <v-btn icon @click.stop="fixed = !fixed">
        <v-icon>mdi-minus</v-icon>
      </v-btn> -->
      <img src="@/assets/65.gif" />
      <v-toolbar-title v-text="title" class="white--text" />
      <v-spacer />
      <!-- <v-btn icon @click.stop="rightDrawer = !rightDrawer">
        <v-icon>mdi-menu</v-icon>
      </v-btn> -->
      <v-toolbar-title v-text="user" class="white--text mr-4" />
      <div class="text-center">
        <v-menu open-on-hover top offset-y>
          <template v-slot:activator="{ on, attrs }">
            <v-btn color="#947EC3" dark v-bind="attrs" v-on="on">
              <v-icon>mdi-menu</v-icon>
            </v-btn>
          </template>

          <v-list-item-group v-model="selectedItem">
            <v-list color="#6A67CE">
              <v-list-item
                class="white--text"
                v-for="(item, index) in itemmenu"
                :key="index"
              >
                <v-list-item-title @click="logout()">{{
                  item.title
                }}</v-list-item-title>
              </v-list-item>
            </v-list>
          </v-list-item-group>
        </v-menu>
      </div>
    </v-app-bar>
    <v-main>
      <Nuxt />
      <!-- <v-container>
        <Nuxt />
      </v-container> -->
    </v-main>
    <v-navigation-drawer v-model="rightDrawer" :right="right" temporary fixed>
      <v-list>
        <v-list-item @click.native="right = !right">
          <v-list-item-action>
            <v-icon light> mdi-repeat </v-icon>
          </v-list-item-action>
          <v-list-item-title>Switch drawer (click me)</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
    <v-footer :absolute="!fixed" app>
      <span>&copy; {{ new Date().getFullYear() }}</span>
    </v-footer>
  </v-app>
</template>

<script>
import axios from 'axios'
export default {
  name: 'DefaultLayout',
  data() {
    return {
      myImage: require('@/assets/pcc_logo.jpg'),
      clipped: true,
      drawer: true,
      fixed: true,
      items: [
        // {
        //   icon: ['fas', 'person-cane'],
        //   title: 'รวม',
        //   to: '/clinic',
        // },
        // {
        //   icon: ['fas', 'person-cane'],
        //   title: 'บันทึกข้อมูล',
        //   to: '/clinic',
        // },

        {
          icon: ['fas', 'person-walking-with-cane'],
          title: 'ข้อมูลทั่วไป',
          to: '/',
        },
        {
          icon: ['fas', 'brain'],
          title: 'Dementia',
          to: '/dementia',
        },
        {
          icon: ['fas', 'person-falling'],
          title: 'Falling',
          to: '/falling',
        },
        {
          icon: ['fas', 'user-doctor'],
          title: 'แพทย์',
          to: '/doctor',
        },
        {
          icon: ['fas', 'fa-square-poll-horizontal'],
          title: 'สรุป',
          to: '/evaluate',
        },
      ],
      items_to: [
        {
          icon: ['fas', 'user-nurse'],
          title: 'SPPB ส่งต่อ',
          to: '/sppb_out',
        },
        {
          icon: ['fas', 'right-from-bracket'],
          title: 'Oxford Knee..ส่งต่อ',
          to: '/oxford_knee_score_out',
        },
      ],
      miniVariant: false,
      right: true,
      rightDrawer: false,
      title: 'คลินิกผู้สูงอายุ  โรงพยาบาลหาดใหญ่',
      itemmenu: [{ title: 'ออกจากระบบ' }],
      selectedItem: '',
      user: '',
      token: '',
      hours: '',
      saved: '',
      token_step2: '',
    }
  },
  methods: {
    login() {
      //check login
      this.session = JSON.parse(localStorage.getItem('token'))

      //ถ้าไม่มี session จาก ฐานข้อมูลคือไม่ได้ login ให้กลับไปหน้า /login
      //--------------------------------------------------------
      //alert(this.session[0].token)

      axios
        .post(`${this.$axios.defaults.baseURL}token_check_step2.php`, {
          token_check_step2: this.session[0].token,
        })

        .then((response) => {
          this.token_step2 = response.data

          // if (this.session === null) {//แบบเก่า
          //alert(JSON.stringify(this.token_step2))
          // alert(this.token_step2[0].token)
          // alert(this.session[0].token)
          if (
            //token จาก localStorage เทียบกับ token จาก database ตอน gen ครั้งแรก
            this.token_step2[0].token != this.session[0].token
          ) {
            //ถ้า token ไม่เท่ากับ token ในฐานข้อมูลจะเข้าไม่ได้
            this.removetoken() //ลบ token ด้วย
            localStorage.clear()

            this.$router.push('/login')
          } else {
            //alert(JSON.stringify(this.session))
            //alert(JSON.stringify(this.session[0].fullname))
            this.user = this.session[0].fullname
            this.token = this.session[0].token

            // แบบเก่า จับเวลาหมดอายุ
            // login 2 ชม ถ้าเกินให้ออก แล้ว clear localstorage
            // this.hours = 2
            // this.saved = localStorage.getItem('saved')
            // if (
            //   this.saved &&
            //   new Date().getTime() - this.saved > this.hours * 60 * 60 * 1000
            // ) {
            //   localStorage.clear()
            //   this.$router.push('/login')
            // }

            //แบบใหม่ จับเวลาหมดอายุ
            var hours = 1
            var now = new Date().getTime()
            var setupTime = localStorage.getItem('setupTime')
            if (setupTime == null) {
              localStorage.setItem('setupTime', now)
            } else {
              if (now - setupTime > hours * 60 * 60 * 1000) {
                localStorage.clear()
                localStorage.setItem('setupTime', now)
                this.$router.push('/login')
              }
            }
          }
        })

      //--------------------------------------------------------
    },
    logout() {
      this.removetoken() //ลบ token ด้วย
      localStorage.removeItem('token')
      localStorage.clear()
      //ไปลบหลัง delete token
      //this.$router.push('/login')
    },
    removetoken() {
      axios
        .put(`${this.$axios.defaults.baseURL}token_delete.php`, {
          token_delete: this.session[0].token,
        })
        .then((response) => {
          this.message = response.data

          if (this.message[0].message === 'ลบข้อมูลสำเร็จ') {
            //หลัง delete token ไป หน้า login
            this.$router.push('/login')
          } else {
            this.$swal({
              title: 'สถานะการลบ',
              text: this.message[0].message,
              icon: 'error',
              confirmButtonText: 'ตกลง',
            })
          }
        })
    },
  },
  beforeMount() {
    this.login()
  },
}
</script>
<style scoped>
/* .max-v-list-height {
  max-height: 400px;
  overflow-y: auto;
} */
/* google font */
#app {
  font-family: 'Trirong', serif;
}

img {
  width: 3%;
  height: auto;
  display: block;
  margin-right: 15px;
}

.logohead {
  margin-top: 15px;
  margin-bottom: 15px;
}

@font-face {
  font-family: Clip;
  src: url('https://acupoftee.github.io/fonts/Clip.ttf');
}

body {
  background-color: #141114;
  background-image: linear-gradient(335deg, black 23px, transparent 23px),
    linear-gradient(155deg, black 23px, transparent 23px),
    linear-gradient(335deg, black 23px, transparent 23px),
    linear-gradient(155deg, black 23px, transparent 23px);
  background-size: 58px 58px;
  background-position: 0px 2px, 4px 35px, 29px 31px, 34px 6px;
}

.sign {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50%;
  height: 50%;
  background-image: radial-gradient(
    ellipse 50% 35% at 50% 50%,
    #6b1839,
    transparent
  );
  transform: translate(-50%, -50%);
  letter-spacing: 2;
  left: 50%;
  top: 50%;
  font-family: 'Clip';
  text-transform: uppercase;
  font-size: 6em;
  color: #ffe6ff;
  text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
    -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
    0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  animation: shine 2s forwards, flicker 3s infinite;
}

@keyframes blink {
  0%,
  22%,
  36%,
  75% {
    color: #ffe6ff;
    text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
      -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
      0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  }
  28%,
  33% {
    color: #ff65bd;
    text-shadow: none;
  }
  82%,
  97% {
    color: #ff2483;
    text-shadow: none;
  }
}

.flicker {
  animation: shine 2s forwards, blink 3s 2s infinite;
}

.fast-flicker {
  animation: shine 2s forwards, blink 10s 1s infinite;
}

@keyframes shine {
  0% {
    color: #6b1839;
    text-shadow: none;
  }
  100% {
    color: #ffe6ff;
    text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
      -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
      0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  }
}

@keyframes flicker {
  from {
    opacity: 1;
  }

  4% {
    opacity: 0.9;
  }

  6% {
    opacity: 0.85;
  }

  8% {
    opacity: 0.95;
  }

  10% {
    opacity: 0.9;
  }

  11% {
    opacity: 0.922;
  }

  12% {
    opacity: 0.9;
  }

  14% {
    opacity: 0.95;
  }

  16% {
    opacity: 0.98;
  }

  17% {
    opacity: 0.9;
  }

  19% {
    opacity: 0.93;
  }

  20% {
    opacity: 0.99;
  }

  24% {
    opacity: 1;
  }

  26% {
    opacity: 0.94;
  }

  28% {
    opacity: 0.98;
  }

  37% {
    opacity: 0.93;
  }

  38% {
    opacity: 0.5;
  }

  39% {
    opacity: 0.96;
  }

  42% {
    opacity: 1;
  }

  44% {
    opacity: 0.97;
  }

  46% {
    opacity: 0.94;
  }

  56% {
    opacity: 0.9;
  }

  58% {
    opacity: 0.9;
  }

  60% {
    opacity: 0.99;
  }

  68% {
    opacity: 1;
  }

  70% {
    opacity: 0.9;
  }

  72% {
    opacity: 0.95;
  }

  93% {
    opacity: 0.93;
  }

  95% {
    opacity: 0.95;
  }

  97% {
    opacity: 0.93;
  }

  to {
    opacity: 1;
  }
}
</style>