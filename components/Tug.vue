<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> Timed Up and Go (TUG) test </v-card-title>
          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            12 วินาที ขึ้นไป มีภาวะเสี่ยงภาวะหกล้ม<br />
            น้อยกว่า 12 วินาที ปกติ <br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <v-row>
            <v-col cols="12" md="10">
              <v-row>
                <v-col cols="12" md="12">
                  <v-img
                    lazy-src="https://picsum.photos/id/11/10/6"
                    max-height="450"
                    max-width="100%"
                    src="https://picsum.photos/id/11/500/300"
                  ></v-img>
                </v-col>
              </v-row>
              <v-row>
                <v-col cols="12" md="12">
                  <h3 class="textlabel mb-2">จับเวลาได้</h3>
                </v-col>
                <v-col cols="12" md="6">
                  <v-text-field label="(นาที)" v-model="tug1"></v-text-field>
                </v-col>
                <v-col cols="12" md="6">
                  <v-text-field
                    label="(วินาที)"
                    v-model="tug2"
                  ></v-text-field> </v-col
              ></v-row>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ fbsi1 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_tug">
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div></v-col
            ></v-row
          >
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: 'Tug',
  data() {
    return {
      tug1: '',
      tug2: '',
    }
  },
  methods: {
    save_tug() {},
  },
}
</script>
