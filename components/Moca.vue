<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title class="font-weight-bold">
            MONTREAL COGNITIVE ASSESSMENT (MOCA)
          </v-card-title>
          <v-divider />
        </v-card-text>
        <v-card-text>
          <!-- ----1------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                VISUOSPATIAL/EXECUTIVE
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="7">
              <img src="@/assets/moca1_50.png" />
            </v-col>
            <v-col cols="12" md="5">
              <v-text-field
                class="mr-8 mt-15 text-h5"
                outlined
                label="คะแนน"
                type="number"
                max-length="5"
                placeholder="0"
                max="5"
                suffix="/5 คะแนน"
                v-model="moca1"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----2------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                NAMING
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <img src="@/assets/moca2_50.png" />
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 mt-15 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                max="3"
                suffix="/3 คะแนน"
                v-model="moca2"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----3------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                MEMORY
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                อ่านชุดคำเหล่านี้แล้วให้ผู้ทดสอบทวนซ้ำ ทดสอบ 2 ครั้ง
                และถามซ้ำอีกครั้งหลัง 5 นาที
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4"> </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----4------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                ATTENTION
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                อ่านตัวเลขต่อไปนี้ตามลำดับ (1 ตัว/วินาที)
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                max="2"
                suffix="/2 คะแนน"
                v-model="moca4_1"
              ></v-text-field>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                อ่านออกตัวเลฃต่อไปนี้
                แล้วให้ผู้ทดสอบเคาะโต๊ะเมื่อได้ยินเสียงอ่านเลข '1'
                (ไม่มีคะแนนถ้าผิดเกิน 2 ครั้ง)
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                max="1"
                suffix="/1 คะแนน"
                v-model="moca4_2"
              ></v-text-field>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                เริ่มจาก 100 ลบไปเรื่อยๆที่ล่ะ7
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                max="3"
                suffix="/3 คะแนน"
                v-model="moca4_2"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----5------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                LANGUAGE
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                Repeat: ฉันรู้ว่าจอมเป็นคนเดียวที่มาช่วยงานช่วงนี้ /
                แมวมักซ่อนตัวอยู่หลังเก้าอี้เมื่อมีหมาอยู่ในห้อง
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                max="2"
                suffix="/2 คะแนน"
                v-model="moca5_1"
              ></v-text-field>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                Fluency / บอกคำที่ขึ้นต้นด้วยตัวอักษร 'ก' ให้มากที่สุด 1
                นาที</v-card-subtitle
              >
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                max="1"
                suffix="/1 คะแนน"
                v-model="moca5_2"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----6------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                ABSTRACTION
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                บอกความเหมือนระหว่าง 2 สิ่ง เช่น กล้วย-ส้ม:เป็นผลไม้
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                max="2"
                suffix="/2 คะแนน"
                v-model="moca6"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----7------->
          <v-row>
            <v-col cols="12" md="12">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                DELAYED RECALL
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="8">
              <v-card-subtitle class="subtitle-1 ml-4">
                ให้ทวนชุดคำที่จำไว้ก่อนหน้านี้โดยไม่มีการให้ตัวช่วย
              </v-card-subtitle>
            </v-col>
            <v-col cols="12" md="4">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                max="5"
                suffix="/5 คะแนน"
                v-model="moca7"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-divider class="mt-5" />
          <!-- ----8------->
          <v-row>
            <v-col cols="12" md="8" class="mt-8">
              <v-card-subtitle class="subtitle-1 ml-4 font-weight-bold">
                ORIENTATION
              </v-card-subtitle>
            </v-col>

            <v-col cols="12" md="4" class="mt-8">
              <v-text-field
                class="mr-8 text-h5"
                outlined
                label="คะแนน"
                type="number"
                placeholder="0"
                max="6"
                suffix="/6 คะแนน"
                v-model="moca8"
              ></v-text-field>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12">
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
  name: 'Moca',
  data() {
    return {
      moca1: '',
      moca2: '',
      // moca3: '',
      moca4_1: '',
      moca4_2: '',
      moca4_3: '',
      moca5_1: '',
      moca5_2: '',
      moca6: '',
      moca7: '',
      moca8: '',
    }
  },
  methods: {
    save_tug() {},
  },
}
</script>
<style>
</style>
